<?php

namespace App\Http\Livewire\Petugas;
use Livewire\WithPagination;
use App\Models\Kategori;
use App\Models\Rak as ModelsRak;
use Livewire\Component;
use Illuminate\Support\Str;

class Rak extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete;
    public $rak, $baris, $kategori, $kategori_id, $rak_id, $search;

    protected $validationAttributes = [
        'kategori_id' => 'kategori'
    ];

    // untuk menampilkan data atau membaca data pada database
    public function render()
    {
        if ($this->search) {
            $raks = ModelsRak::latest()->where('rak', $this->search)->paginate(5);
        } else {
            $raks = ModelsRak::latest()->paginate(5);
        }
        $count = ModelsRak::select('rak')->distinct()->get();
        $kate = Kategori::all();
        return view('livewire.petugas.rak',compact('raks', 'count','kate'));
    }

    // public function create()
    // {
    //     $this->create = false;
    //     $this->kategori = Kategori::all();
    // }

    public function store()
    {
        $rak_pilihan = ModelsRak::select('baris')->where('rak', $this->rak)->get()->implode('baris', ',');
       
        $this->validate([
            'rak' => 'required|numeric|min:1',
            'baris' => 'required|numeric|min:1|not_in:' . $rak_pilihan,
            'kategori_id' => 'required|numeric|min:1',
        ]);
        
        ModelsRak::create([
            'rak' => $this->rak,
            'baris' => $this->baris,
            'kategori_id' => $this->kategori_id,
            'slug' => $this->rak .'-' .$this->baris
        ]);

        session()->flash('sukses', 'Rak berhasil ditambahkan');

        $this->format();
        $this->emit('rak');
    }

    public function edit(ModelsRak $rak)
    {
        $rak_lama = ModelsRak::find($this->rak_id);

        if ($rak_lama->rak == $this->rak) {
            $rak_baru = ModelsRak::select('baris')->where('rak', $this->rak)->where('baris', '!=', $rak_lama->baris)->get()->implode('baris', ',');
        } else {
            $rak_baru = ModelsRak::select('baris')->where('rak', $this->rak)->get()->implode('baris', ',');
        }
        
        $this->validate([
            'rak' => 'required|numeric|min:1',
            'baris' => 'required|numeric|min:1|not_in:' . $rak_baru,
            'kategori_id' => 'required|numeric|min:1',
        ]);

        $rak->update(['rak' => $this->rak,
            'baris' => $this->baris,
            'kategori_id' => $this->kategori_id,
            'slug' => $this->rak . '-' . $this->baris
    ]);

        session()->flash('sukses', 'Data berhasil diubah.');

        $this->format();
    }

    public function format()
    {
        unset($this->session);
        unset($this->edit);
        unset($this->delete);
        unset($this->rak_id);
        unset($this->rak);
        unset($this->baris);
        unset($this->kategori_id);
        unset($this->kategori);
    }
}
