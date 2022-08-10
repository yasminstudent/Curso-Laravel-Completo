<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $name = 'Yasmin';
        $age = 20;
        $lastName = 'Pereira';
        $birthDate = '16/03/2002';

        $data = [
            'username' => $name,
            'age' => $age,
            'lastName' => $lastName,
            'birthDate' => $birthDate
        ];

        return view('welcome', $data);
    }

    public function exit(){
        return view('exit');
    }

    public function users(Request $request){
        return view('users', [
            'numberUsers' => $request->numberUsers
        ]);
    }
}
