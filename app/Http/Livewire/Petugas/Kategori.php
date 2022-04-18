<?php

namespace App\Http\Livewire\Petugas;
use Livewire\WithPagination;
use App\Models\Kategori as MKategori;
use Livewire\Component;
use Illuminate\Support\Str;
class Kategori extends Component
{
    // public $kat_id, $nama, $edit;
    public $create, $edit, $delete, $nama, $kategori_id, $search;
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
            'kategori' => MKategori::latest()->paginate(5)
        ]);
    }


    public function create()
    {
        $this->format();

        $this->create = true;
    }

    public function store()
    {
        $this->validate();

        MKategori::create([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('sukses', 'Kategori berhasil ditambahkan');

        $this->format();
        $this->emit('kategori');
    }

    public function edit(MKategori $kategori)
    {
        $this->format();

        $this->edit = true;
        $this->nama = $kategori->nama;
        $this->kategori_id = $kategori->id;
    }

    public function update(MKategori $kategori)
    {
        $this->validate();

        $kategori->update([
            'nama' => $this->nama,
            'slug' => Str::slug($this->nama)
        ]);

        session()->flash('edit', 'Kategori berhasil diubah');

        $this->format();
        $this->emit('kategori');
    }

    private function reset_tulisan()
    {
        $this->nama = '';
    }

    // public function edit($id)
    // {
    //     $this->status = true;
    //     $edit = Mkategori::where('id',$id)->first();
    //     $this->nama = $edit->nama;
    //     $this->kat_id = $edit->id;
    // }

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

    public function format()
    {
        unset($this->kategori_id);
        unset($this->nama);
        unset($this->create);
        unset($this->edit);
        unset($this->delete);
    }


}
