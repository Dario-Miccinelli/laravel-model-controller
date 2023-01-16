<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // $movie_filtered =laravel_model_controller::where('title', 'original_title', 'nationality')->get();

        $movie = Movie::all();

        // dd($movie);
     
         return view('welcome', compact('movie'));


       
    }
}
