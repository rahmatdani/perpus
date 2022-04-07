<?php

namespace App\Http\Livewire;
use App\Models\Buku;
use Livewire\Component;
// use RealRashid\SweetAlert\Facades\Alert;


class MasterBuku extends Component
{
    public $buku_id, $hapus, $judulbuku, $isbn, $nomorpunggung, $kdbukupenerbit, $penerbit, $tahunterbit, $penulis, $jumlahhalaman, $jeniskoleksi, $fiksinonfiksi, $jenjang, $tipebuku, $kategori, $gambar;
    public $status = 1;
    protected $listeners = [
        'deleteg' => 'deleteg'
    ];
    
    // public function mount($buku_id)
    // {
    //     $this->buku_id = $buku_id;
    // }

    public function render()
    {
        return view('livewire.master-buku',[
            'buku' => Buku::latest()->get()
            // 'detail' => Buku::latest()->first()
        ]);
    }

    // public function viewbuku()
    // {
    //     return view('livewire.master-buku',[
    //         'viewbuku' => Buku::first('id',$buku_id)->get()
    //     ]);
    // }

   

    public function simpan()
    {
        Buku::updateOrCreate([
            'id' => $this->buku_id
        ],[
            'isbn' => $this->isbn,
            'nomorpunggung' => $this->nomorpunggung,
            'penerbit' => $this->penerbit,
            'tahunterbit' => $this->tahunterbit,
            'jenjang' => $this->jenjang,
            'tipebuku' => $this->tipebuku,
            'kategori' => $this->kategori,
            'judulbuku' => $this->judulbuku,
            'kdbukupenerbit' => $this->kdbukupenerbit,
            'penulis' => $this->penulis,
            'jumlahhalaman' => $this->jumlahhalaman,
            'jeniskoleksi' => $this->jeniskoleksi,
            'fiksinonfiksi' => $this->fiksinonfiksi,
            'gambar' => $this->gambar
        ]);
        session()->flash('message', 'Buku Berhasil Ditambahkan');
        $this->reset_tulisan();
    }
    public function edit($id)
    {
        $this->status = 2;
        $edit = Buku::where('id',$id)->first();
        $this->isbn=$edit->isbn;
        $this->judulbuku=$edit->judulbuku;
        $this->nomorpunggung=$edit->nomorpunggung;
        $this->kdbukupenerbit=$edit->kdbukupenerbit;
        $this->penerbit=$edit->penerbit;
        $this->tahunterbit=$edit->tahunterbit;
        $this->penulis=$edit->penulis;
        $this->jumlahhalaman=$edit->jumlahhalaman;
        $this->jeniskoleksi=$edit->jeniskoleksi;
        $this->fiksinonfiksi=$edit->fiksinonfiksi;
        $this->jenjang=$edit->jenjang;
        $this->tipebuku=$edit->tipebuku;
        $this->kategori=$edit->kategori;
        $this->gambar=$edit->gambar;
        $this->buku_id=$edit->id;
    }

    public function viewbuku($id)
    {
        $this->status = 3;
        $viewbuku = Buku::where('id',$id)->first();
        $this->isbn=$viewbuku->isbn;
        $this->judulbuku=$viewbuku->judulbuku;
        $this->nomorpunggung=$viewbuku->nomorpunggung;
        $this->kdbukupenerbit=$viewbuku->kdbukupenerbit;
        $this->penerbit=$viewbuku->penerbit;
        $this->tahunterbit=$viewbuku->tahunterbit;
        $this->penulis=$viewbuku->penulis;
        $this->jumlahhalaman=$viewbuku->jumlahhalaman;
        $this->jeniskoleksi=$viewbuku->jeniskoleksi;
        $this->fiksinonfiksi=$viewbuku->fiksinonfiksi;
        $this->jenjang=$viewbuku->jenjang;
        $this->tipebuku=$viewbuku->tipebuku;
        $this->kategori=$viewbuku->kategori;
        $this->gambar=$viewbuku->gambar;
        $this->buku_id=$viewbuku->id;
    }

    private function reset_tulisan()
    {
        $this->isbn='';
        $this->judulbuku='';
        $this->nomorpunggung='';
        $this->kdbukupenerbit='';
        $this->penerbit='';
        $this->tahunterbit='';
        $this->penulis='';
        $this->jumlahhalaman='';
        $this->jeniskoleksi='';
        $this->fiksinonfiksi='';
        $this->jenjang='';
        $this->tipebuku='';
        $this->kategori='';
        $this->gambar='';
    }

    public function hapus($id)
    {   
        // $this->hapus = Buku::where('id',$id)->first();
        $this->hapus = Buku::find($id);
        $this->emit('hapus');
        $this->emit('swal','Hapus Buku ','question');
    }

    public function deleteg(){
        // if ($this->hapus) {

                // if(!empty($this->hapus->id)){
                // File::delete('storage/'.$this->hapus->upload->gambar);
                // };
            //     $this->hapus->delete();
            //     dd($this->hapus->delete);
            // }

            // dd($this->hapus->id);
            // $hapus = Buku::find($id);
            // $hapus_data->delete();
            $this->hapus->delete();
            // Buku::where('id', $id)->delete();
            // dd($id);
        // }
    }

    // public function deleteg()
    // {
    //     // if($this->hapus){
    //     //     $hapus_data=Buku::find($id);
    //         $this->delete->deleteg();
    //     // }
    // }

    public function view($id)
    {
        // if($id){
            $viewbuku=Buku::where('id',$id)->first();
            $this->judulbuku=$viewbuku->judulbuku;
            $this->isbn=$viewbuku->isbn;
            $this->nomorpunggung=$viewbuku->nomorpunggung;
            $this->kdbukupenerbit=$viewbuku->kdbukupenerbit;
            $this->penerbit=$viewbuku->penerbit;
            $this->tahunterbit=$viewbuku->tahunterbit;
            $this->penulis=$viewbuku->penulis;
            $this->jumlahhalaman=$viewbuku->jumlahhalaman;
            $this->jeniskoleksi=$viewbuku->jeniskoleksi;
            $this->fiksinonfiksi=$viewbuku->fiksinonfiksi;
            $this->jenjang=$viewbuku->jenjang;
            $this->tipebuku=$viewbuku->tipebuku;
            $this->kategori=$viewbuku->kategori;
            $this->gambar=$viewbuku->gambar;
            $this->buku_id=$viewbuku->id;
        // }
    }

    public function clear()
    {
        $status = false;
        $this->reset_tulisan();
    }

}
