<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        return view('guests.welcome');
    }

    public function movies()
    {
        $movies = Movie::all();
        //dd($movies);

        return view('guests.movies', compact('movies'));
    }

    public function tvshows()
    {
        return view('guests.tvshows');
    }

    public function people()
    {
        return view('guests.people');
    }

    public function more()
    {
        return view('guests.more');
    }
}
