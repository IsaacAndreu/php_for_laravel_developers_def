<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        return view('about');
    }
}