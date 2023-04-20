@extends('layouts.app')

@section('content')

<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div class="row">
                        <div class="card text-bg-dark">
                            <img src="{{ asset('storage/images/' . $movie->image_id) }}" width="1920" height="721">
                            <div class="card-img-overlay d-flex flex-column justify-content-center align-items-start">
                                <div class="col-12 col-md-8">

                                    <div class="mt-2 mt-md-5">
                                        <button type="button" class="btn btn-light text-dark">Buy Movie</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bg-dark text-light">
            <div class="row">
             
                <div class="col-2">
                    <p>Rating:</p>
                    {{ $movie-> rating }}
                </div>
              
            <div class="col-2 bg-dark  text-light">
              
                    <p>Description:</p>
                    {{$movie-> description}}
                </div>
            </div>
        
            <div class="col-2 bg-dark text-light">
             
                    <p class = "text-light">Duration:</p>
                    {{$movie-> duration}}
                </div>
            </div>
         
            </div>
    
        </div>

    

        <div class=" text-light">
            <div class="row  text-light">
                <p>More Like this</p>
                @forelse ($movie->take(3) as $Movie)
                <div class="col-2">
                    <div class="col gy-5 my-6 p-6 bg-dark border-b ms-2 border-gray-200 shadow-sm sm:rounded-lg">
                        <a href="{{ route('admin.newreleases.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="350" height="194">
                        </a>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </div>

        <div class="card text-center bg-dark">
            <div class="card-header">

            </div>
            <div class="card-body">
                <h5 class="card-title text-danger">Benflix</h5>
                <div class="row">
                    <div class="col-2">
                        <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
                    </div>
                    <div class="col-2">
                        <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
                    </div>
                    <div class="col-2">
                        <p class=<p><a class="link-opacity-10" href="#">Help</a>
                    </div>
                    <div class="col-2">
                        <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
                    </div>
                    <div class="col-2">
                        <p class=<p><a class="link-opacity-10" href="#">2023-2023 , Benflix.com,inc or its affiliates</a>
                    </div>
                </div>
                <div class="flex">

                    <!-- when EDIT BUTTON is clicked, route to admin.books.edit -->
                    <a href="{{ route('admin.newreleases.edit', $movie) }}" class="btn-link ml-auto">Edit</a>

                    <!-- delete button is wrapped in a form, with the delete method. -->
                    <form action="{{ route('admin.newreleases.destroy', $movie) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
                </div>

                @endsection