<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuariController extends Controller
{

    public function index()
    {
        return view('users', [
            'usuaris' => Usuari::all()
        ]);
    }

}