<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{

    use HasFactory;

    protected $table = 'buku';
    
    // protected $table = "master_buku";
    // public $fillable = ['id_buku','judulbuku','nomorpunggung','isbn','kdbukupenerbit','penerbit','tahunterbit','penulis','jumlahhalaman','jeniskoleksi','fiksinonfiksi','jenjang','tipebuku','kategori','gambar'];

    // public function User()
    // {
    //     return $this-belongsTo(User::class, 'user_id', 'id');
    // }
}
