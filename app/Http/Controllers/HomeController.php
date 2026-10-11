<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', ['judul' => 'Beranda - CampusInfo']);
    }

    public function contact(): View
    {
        return view('kontak', ['judul' => 'Kontak Kami']);
    }
}

