@extends('layouts.app')

@section('content')

<div>
    <div class="row justify-content-center ">


        <div class="col my-6 p-6  ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div class="row">
                        <div class="card text-">
                            <img src="{{ asset('storage/images/' . $movie->image_id) }}" width="1920" height="721">
                            <div class="card-img-overlay d-flex flex-column justify-content-end align-items-start ">
                                <div class="col-12 col-md-8">

                                    <div class="md-5 me-2 mt-3 fs-3">
                                        <button type="button" class="btn btn-light text-dark  me-5 ms-5 fs-3">Play Movie</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="container-fluid text-light">
        <div>
                        <h2 class="my-3 ms-3">Rating: {{ $movie-> rating }}</h2>

                    </div>
            <div class="row">
                <div class="col-6  mt-5 ms-3">
               
                    <div>
                        <h2 class="my-4">Release Date:</h2>
                        <h3>{{ $movie-> date }}</h3>

                    </div>
                    <div>
                        <h2 class="my-5">Duration:</h2>
                        <h3> {{$movie-> duration}} minutes</h3>

                    </div>
                    <div  class = "my-5">
                        <h2 >Description: </h2>
                        <h3> {{$movie-> description}}</h3>

                    </div>
                </div>

                <div class="col my-5 ">
                    <div class="d-flex align-items-center  mt-5 ">
                        <h3 class = " text-dark my-3">Cast: {{ $movie-> title }}</h3>
                
                    </div>
                    <div class="d-flex align-items-center  ">
                        <h3 class="my-4">Genre: {{ $movie-> title }}</h3>
               
                    </div>
                    <div class="d-flex align-items-center  ">
                        <h3 class="my-4">This film is: {{ $movie-> title }} </h3>
                 
                    </div>

                </div>


            </div>
        </section>


    </div>
</div>
<div class = " text-light">
<h2 class="">More Like this</h2>
</div>

<div class="d-flex justify-content-center text-light pt-5 me-5 align-items-center">

    <div class="me-5 text-light d-flex justify-content-center align-items-center">
      
        @forelse ($movies as $movie)
        <div class="col-4 my-5   d-flex align-items-center shadow-sm sm:rounded-lg">
                <a href="{{ route('movies.show', $movie) }}">
                    <img src="{{ asset('storage/images/' . $movie->image_id) }}"  width="413" height="470"
                </a>
              
            </div>
    @empty
    @endforelse
    </div>
   
</div>
    
            <div class="card text-center bg-black">
       
       <div class="card-body">
           <h5 class="card-title text-danger fs-1">Benflix</h5>
           <div class="row  d-flex align-items-center">
               <div class="col-2  my-2 me-3 ps-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
               </div>
               <div class="col-2 my-2 me-3 ps-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
               </div>
               <div class="col-2 my-2 me-3 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Help</a>
               </div>
               <div class="col-2 my-2 me-3 fs-5">
                   <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
               </div>
               <div class="col-2 my-2  fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">2023-2023 , Benflix.com,inc or its affiliates</a>
               </div>
           </div>


                    

              
                    <form action="{{ route('newreleases.destroy', $movie) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
                </div>
                
        </div>

    


          

                @endsection