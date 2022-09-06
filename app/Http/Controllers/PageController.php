<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        echo "Selamat Datang";
    }

    public function about()
    {
        echo "NIM : 2241727019";
        echo "<br>";
        echo "Nama : Maretyatianhar Gunsa";
        echo "<br>";
        echo "Kelas : TI-4J";
    }

    public function articles($id)
    {
        echo "Halaman Artikel dengan ID " . $id;
    }
}
