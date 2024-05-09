<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        $movies = Movie::all(); //per recuperare tutti i dati dell atabella del database
        //dd($movies);

        return view('guests.movies.welcome', compact('movies'));
    }

    public function show($id)
    {
        $movies = Movie::all()[$id];
        //dd($movies);

        return view('guests.movies.show', compact('movies'));
    }
    public function about()
    {
        return view('guests.about');
    }

    public function contacts()
    {
        return view('guests.contacts');
    }


}
