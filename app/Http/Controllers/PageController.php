<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Raymon Devtant<br>Nim : 244107020009';
    }

    public function article($id)
    {
        return 'Halaman Artikel dengan ID {' . $id . '}';
    }
}
