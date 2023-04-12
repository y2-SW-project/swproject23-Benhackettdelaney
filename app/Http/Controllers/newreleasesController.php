<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\newreleases;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class newreleasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $movies = Movie::where('new_releases', '1')->get();
        // $genres = Genre::all();
        // return($genres);
        return view('newreleases.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newreleases.create');
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
          
            
        ]);
        $image_id = $request->file('image_id');
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
            'image_id' => $filename
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
         
        return view('newreleases.show')->with('Movie', $movie);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('newreleases.edit')->with('Movie', $movie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $Movie)
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
    
        ]);

        $image_id = $request->file('image_id');
        $extension = $image_id->getClientOriginalExtension();

        $filename = date('Y-s-d-His') . '_' . $request->input('title') . '.'. $extension;

       
        $path = $image_id->storeAs('public/images', $filename);
       
        
        $Movie->update([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date,
            'new_releases'=>$request->new_releases,
            'image_id' => $filename
        ]);

        return to_route('movies.show', $Movie)->with('success','Movie updated successfully');
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

        return to_route('newrelease.index')->with('success', 'Movie deleted successfully');
    }
}
