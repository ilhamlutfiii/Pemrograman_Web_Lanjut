<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang ilham";
        }
    
    public function about() {
        return "NIM : 2041720025 <br> NAMA : Ilham Lutfiansyah <br> KELAS : TI2C";
        }
    
    public function articles($id) {
        return "Ini adalah halaman article dengan ID".$id;
        }
}
