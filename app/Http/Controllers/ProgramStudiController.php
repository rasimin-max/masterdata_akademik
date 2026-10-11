<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProgramStudiController extends Controller
{
    public function index(): View
    {
        // Data array dikirim dari controller ke Blade (belum wajib database)
        $prodiList = [
            ['nama' => 'Teknik Informatika', 'jenjang' => 'S1', 'akreditasi' => 'Unggul'],
            ['nama' => 'Sistem Informasi', 'jenjang' => 'S1', 'akreditasi' => 'Baik Sekali'],
        ];

        return view('prodi', [
            'judul' => 'Program Studi CampusInfo',
            'prodiList' => $prodiList
        ]);
    }
}