<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\newreleases;
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
       

        $newreleases = Newreleases::all();
        return view('movies.create')->with('newreleases',$newreleases);
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
            //'Movie' => 'file|image|dimensions:width=300,height=400'
            // 'Movie' => 'file|image',
           
        ]);

       
        Movie::create([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date
        ]);

        return to_route('movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movies)
    {
       

        if(!Auth::id()) {
           return abort(403);
         }
         
        return view('movies.show')->with('Movie', $movies);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movies)
    {
      
        $newreleases = newreleases::all();
      
    

        // Load the edit view which will display the edit form
        // Pass in the current Movie so that it appears in the form.
        // return view('admin.Movies.edit')->with('Movie', $Movie, 'distilleries', $distilleries);
        return view('movies.edit', compact('movies', 'newreleases'));
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
        ]);

       
        
        $Movie->update([
            'age_group' => $request->age_group,
            'title' => $request->title,
            'description' => $request->description,
            'duration' =>$request->duration,
            'rating' =>$request->rating,
            'date' =>$request->date
        ]);

        return to_route('admin.Movies.show', $movies)->with('success','Movie updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movies)
    {
   
        $movies->delete();

        return to_route('Movies.index')->with('success', 'Movie deleted successfully');
    }
}
