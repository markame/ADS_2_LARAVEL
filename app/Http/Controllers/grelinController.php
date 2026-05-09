<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class grelinController extends Controller
{
    public function index(){
        return view('index');
    }
    public function sinopse(){
        return view('pages.sinopse');
    }

}
