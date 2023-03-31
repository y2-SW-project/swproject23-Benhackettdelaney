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
       $movies = Movie::paginate(10);
       $movies = Movie::with('newreleases')->get();

        return view('movies.index')->with('movies', $movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
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
            'new_releases'=>'required'
            //'Movie' => 'file|image|dimensions:width=300,height=400'
            // 'Movie' => 'file|image',
           
        ]);

       
        Movie::create([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date,
            'new_releases'=>$request->new_releases
        ]);

        return to_route('movies.index');
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
      
        // Load the edit view which will display the edit form
        // Pass in the current Movie so that it appears in the form.
        // return view('admin.Movies.edit')->with('Movie', $Movie, 'distilleries', $distilleries);
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
            'new_releases'=>'required'
        ]);

       
        
        $movie->update([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date,
            'new_releases'=>$request->new_releases
        ]);

        return to_route('movies.show', $movies)->with('success','Movie updated successfully');
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

        return to_route('movies.index')->with('success', 'Movie deleted successfully');
    }
}
