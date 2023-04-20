@extends('layouts.app')

@section('content')

<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div class="row">
                        <div class="card text-bg-dark">
                            <img src="{{ asset('storage/images/' . $movie->image_id) }}" width="1920" height="721">
                            <div class="card-img-overlay d-flex flex-column justify-content-end align-items-start ">
                                <div class="col-12 col-md-8">

                                    <div class="md-5 me-2 mt-3 fs-3">
                                        <button type="button" class="btn btn-light text-dark  me-5 ms-5 fs-3">Buy Movie</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
             
                <div class="col-6 bg-dark  text-light fs-2  ms-3.5 my-3 ">
                    <p>Rating:  {{ $movie-> rating }}</p>
              
                </div>
                <div class="col-2 bg-dark  text-light fs-2   my-5 ">
                    <p>Rating:  {{ $movie-> rating }}</p>
                    <p>cast:  {{ $movie-> rating }}</p>
                    <p>Film Genre:  {{ $movie-> title }}</p>
                </div>
                </div>
   
        <div class="container bg-dark text-light fs-3 ms-5  ">
            <div class="row">
             
                <div class="col-4 fs-2 my-4">
                    <p>Release Date:  {{ $movie-> date }}</p>
                   
                </div>
                </div>
                <div class="row">
            <div class="col-4 bg-dark  text-light fs-2   my-4 ">
              
                    <p>Description: {{$movie-> description}}</p>
                  
                </div>
                </div>
            </div>

            <div class="row">
            <div class="col-4 bg-dark text-light fs-2 ms-3 my-4">
             
                    <p class = "text-light">Duration: {{$movie-> duration}} minutes</p>
                  
                </div>
                </div>
            </div>
         

            <div class=" text-light">
            <div class="row  text-light">
                <p>More Like this</p>
                @forelse ($movie->take(3) as $Movie)
                <div class="col-2">
                    <div class="col gy-5 my-6 p-6 bg-dark border-b ms-2 border-gray-200 shadow-sm sm:rounded-lg">
                        <a href="{{ route('newreleases.show', $Movie) }}">
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
    
            <div class="card text-center bg-dark">
       
       <div class="card-body">
           <h5 class="card-title text-danger fs-1">Benflix</h5>
           <div class="row">
               <div class="col-2  my-2 me-5 ps-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
               </div>
               <div class="col-2 my-2 me-5 ps-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
               </div>
               <div class="col-2 my-2 me-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Help</a>
               </div>
               <div class="col-2 my-2 me-5 fs-5">
                   <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
               </div>
               <div class="col-2 my-2  fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">2023-2023 , Benflix.com,inc or its affiliates</a>
               </div>
           </div>

                    <!-- when EDIT BUTTON is clicked, route to admin.books.edit -->
                    <a href="{{ route('newreleases.edit', $movie) }}" class="btn-link ml-auto">Edit</a>

                    <!-- delete button is wrapped in a form, with the delete method. -->
                    <form action="{{ route('newreleases.destroy', $movie) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
                </div>
                
        </div>

    


          

                @endsection