<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('admin/home', [
            "title" => "Home"
        ]);
    }

    public function masterbuku()
    {
        return view('admin/inventory/masterbuku', [
            "title" => "Master Buku"
        ]);
    }

    public function siswa()
    {
        return view('siswa/siswa', [
            "title" => "siswa"
        ]);
    }

    

    
}
