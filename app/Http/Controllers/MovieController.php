<?php

namespace App\Http\Controllers;

use App\Movie;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $film = Movie::all();

    }
    
}



