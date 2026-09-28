<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Najwa Amanda Desyari',
            'email' => 'najwa.amanda@example.com',
        ];

        return view('halo', $data);
    }
}
