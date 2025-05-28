<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $data = [
            'nama' => 'Laediya Amara',
            'email' => 'laediyaamara@gmail.com',
            'bio' => 'Saya adalah seorang web developer yang menyukai Laravel.'
        ];

        return view('profil', $data);
    }
}
