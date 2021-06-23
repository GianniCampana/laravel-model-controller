<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $Movies = Movie::all();
        dump($Movies);
        return view('home');
    }
}
