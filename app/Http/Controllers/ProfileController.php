<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'nama' => 'Najwa Amanda Desyari',
            'email' => 'najwaamandadesyari@gmail.com',
            'bio' => 'Saya seorang mahasiswa Teknik Informatika semester 5 yang saat ini sedang menempuh mata kuliah Pemrograman Web Berbasis Framework. Saya seorang mahasiswa yang mempunyai semangat belajar tinggi, serta mampu beradaptasi dengan segala perubahan yang ada, serta berharap mampu menyelesaikan semester 5 dan seterusnya dengan baik.',
        ];

        return view('profile', compact('profile'));
    }
}
