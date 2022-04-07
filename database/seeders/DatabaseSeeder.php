<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Rak;
use App\Models\Penerbit;
use App\Models\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for ($i=1; $i <= 5; $i++){
            Rak::create([
                'rak' => 1,
                'baris' => $i,
                'kategori_id' => 1,
                'slug' => 1 .'-' .$i
            ]);
        }

        Penerbit::create([
            'nama' => 'gramedia',
            'slug' => 'gramedia'
        ]);
        Penerbit::create([
            'nama' => 'erlangga',
            'slug' => 'erlangga'
        ]);

        User::create([
            'name' => 'Rahmat Dani S',
            'email' => 'rahmatdani2699@gmail.com',
            'password' => bcrypt('dani'),
            'role_id' => 1

        ]);
        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('dani'),
            'role_id' => 2

        ]);

        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('dani'),
            'role_id' => 3

        ]);

        Role::create([
            'role' => 'admin',
            'ket' => 'admin web'
        ]);
        Role::create([
            'role' => 'petugas',
            'ket' => 'admin perpus'
        ]);
        Role::create([
            'role' => 'peminjam',
            'ket' => 'siswa'
        ]);

        Kategori::create([
            'nama' => 'novel',
            'slug' => Str::slug('novel')
        ]);
        Kategori::create([
            'nama' => 'sejarah',
            'slug' => Str::slug('sejarah')
        ]);
        Kategori::create([
            'nama' => 'religi',
            'slug' => Str::slug('religi')
        ]);
        Kategori::create([
            'nama' => 'biografi',
            'slug' => Str::slug('biografi')
        ]);
        Kategori::create([
            'nama' => 'komik',
            'slug' => Str::slug('komik')
        ]);

        Buku::create([
            'judul' => 'bintang',
            'slug' => Str::slug('bintang'),
            'sampul' => 'dani.jpg',
            'penulis' => 'tere liye',
            'penerbit_id' => 1,
            'kategori_id' => 1,
            'rak_id' => 1,
            'stok' => 10
        ]);

        Buku::create([
            'judul' => 'bulan',
            'slug' => Str::slug('bulan'),
            'sampul' => 'dani.jpg',
            'penulis' => 'tere liye',
            'penerbit_id' => 1,
            'kategori_id' => 1,
            'rak_id' => 1,
            'stok' => 10
        ]);

        // Buku::create([
        //     'judulbuku' => 'Bahasa Program untuk emberio',
        //     'isbn' => '123123123',
        //     'nomorpunggung' => '32132132',
        //     'kdbukupenerbit' => '123123',
        //     'penerbit' => 'erlangga',
        //     'tahunterbit' => '2022',
        //     'penulis' => 'rahmat dani',
        //     'jumlahhalaman' => '200',
        //     'jeniskoleksi' => 'biograpy',
        //     'fiksinonfiksi' => 'fiksi',
        //     'jenjang' => 'smk',
        //     'tipebuku' => 'ada',
        //     'kategori' => 'ada',
        //     'gambar' => 'dani.jpg'
        // ]);
        
    }
}
