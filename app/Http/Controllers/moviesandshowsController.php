<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\newreleases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MoviesAndShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

        $movies = Movie::all();
   
       $movies = Movie::with('newreleases')->get();

        return view('movies.index')->with('movies', $movies);
        return view('movies.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $request->validate([
            'age_group' => 'required|max:18',
            'title' => 'required',
            'description' => 'required',
            'duration' =>'required|max:100',
            'rating' =>'required|max:5',
            'date' =>'required',
            'new_releases'=>'required',
            'image_id' => 'file|image'
            
        ]);
        $image_id = $request->file('Fury.jpg');
        $extension = $image_id->getClientOriginalExtension();

        $filename = date('Y-s-d-His') . '_' . $request->input('title') . '.'. $extension;

       
        $path = $image_id->storeAs('public/images', $filename);
       
        Movie::create([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date,
            'new_releases'=>$request->new_releases, 
            'image_id' => 'file|image'
        ]);

        return to_route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
       

        if(!Auth::id()) {
           return abort(403);
         }
         
        return view('movies.show')->with('Movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
      
       
        return view('movies.edit')->with('Movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
     

         //   //This function is quite like the store() function.
          $request->validate([
            'age_group' => 'required|max:18',
            'title' => 'required',
            'description' => 'required',
            'duration' =>'required|max:100',
            'rating' =>'required|max:5',
            'date' =>'required',
            'new_releases'=>'required',
            'image_id' => 'file|image'
        ]);

        $image_id = $request->file('Fury.jpg');
        $extension = $image_id->getClientOriginalExtension();

        $filename = date('Y-s-d-His') . '_' . $request->input('title') . '.'. $extension;

       
        $path = $image_id->storeAs('public/images', $filename);
       
        
        $movie->update([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date,
            'new_releases'=>$request->new_releases,
            'image_id' => 'file|image'
        ]);

        return to_route('home', $movie)->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
   
        $movie->delete();

        return to_route('home')->with('success', 'Movie deleted successfully');
    }
}