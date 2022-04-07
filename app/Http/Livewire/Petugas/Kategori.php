<?php

namespace App\Http\Livewire\Petugas;
use Livewire\WithPagination;
use App\Models\Kategori as MKategori;
use Livewire\Component;
use Illuminate\Support\Str;
class Kategori extends Component
{
    public $kat_id, $nama, $edit;
    public $status = false;
    protected $listeners = [
        'delete' => 'delete'
    ];

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $rules = [
        'nama' => 'required|min:5',
    ];

    public function render()
    {
        return view('livewire.petugas.kategori',[
            'kategori' => MKategori::latest()->paginate(10)
        ]);
    }

    public function simpan()
    {
        // $this->status = 3;
        $this->validate();
        // $this->kat_id = 0;
        Mkategori::updateOrCreate([
            'id' => $this->kat_id
        ],[
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);
        $this->emit('kategori');
        // unset($this->simpan);
        $this->reset_tulisan();
        // dd($kat_id);
    }

    private function reset_tulisan()
    {
        $this->nama = '';
    }

    public function edit($id)
    {
        $this->status = true;
        $edit = Mkategori::where('id',$id)->first();
        $this->nama = $edit->nama;
        $this->kat_id = $edit->id;
    }

    public function hapus($id)
    {
        // if($id)
        // {
        //     $hapus_data = Mkategori::find($id);
        //     $hapus_data->delete();
        // }

        $this->hapus = Mkategori::find($id);
        $this->emit('hapus');
        $this->emit('swal','Hapus Kategori','question');
    }

    public function delete()
    {
        $this->hapus->delete();
    }

    public function clear()
    {
        $status = false;
        $this->reset_tulisan();
    }


}
