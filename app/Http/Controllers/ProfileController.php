<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){

        $data = [
            'Nama' => 'Aulia Dwi Husnawati',
            'NPM' => '2317051003',
            'Kelas' => 'B'
        ];
    }
    //
}
