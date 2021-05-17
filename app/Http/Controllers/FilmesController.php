<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

class FilmesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $token= config('services.tmdb.api_key');
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular'.$token)
            ->json(['results']);

        $generesArray = Http::get('https://api.themoviedb.org/3/genre/movie/list'.$token)
            ->json(['genres']);

        $genres = collect($generesArray)->mapWithKeys(function ($genre){
            return [$genre['id'] => $genre['name']];
        });
        return view('home.index',[
            'popularMovies' => $popularMovies,
            'genres' => $genres,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        $token= config('services.tmdb.api_key');
        $credits='&append_to_response=credits,videos,images';
        $movie = Http::get('https://api.themoviedb.org/3/movie/'.$id.$token.$credits)
            ->json([]);
        return view('home.show',[
            'movie' => $movie
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
