@extends('layouts.app')

@section('content')



<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div class="row">
                        <div class="card text-bg-dark">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
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

        <section class="container border border-primary text-light">
        <div>
                        <h2 class="my-3 ms-3">Rating: {{ $Movie-> rating }}</h2>
                        <!-- <p>{{ $Movie-> date }}</p> -->

                    </div>
            <div class="row">
                <div class="col-6 border mt-5 ms-3">
               
                    <div>
                        <h2 class="my-4">Release Date: {{ $Movie-> date }}</h2>
                        <!-- <p>{{ $Movie-> date }}</p> -->

                    </div>
                    <div>
                        <h2 class = "my-5">Duration: {{$Movie-> duration}} minutes</h2>
                        <!-- <p > {{$Movie-> duration}} minutes</p> -->

                    </div>
                    <div>
                        <h2 class = "my-5">Description: {{$Movie-> description}} </h2>
                        <!-- <p> {{$Movie-> description}}</p> -->

                    </div>
                </div>

                <div class="col my-5 ">
                    <div class="d-flex align-items-center mt-5 ">
                        <h3 class = "my-3">Cast: {{ $Movie-> title }}</h3>
                        <!-- <p> {{ $Movie-> title }}</p> -->
                    </div>
                    <div class="d-flex align-items-center  ">
                        <h3 class="my-3">Genre: {{ $Movie-> title }}</h3>
                        <!-- <p> {{ $Movie-> title }}</p> -->
                    </div>
                    <div class="d-flex align-items-center  ">
                        <h3 class="my-3">This film is: {{ $Movie-> title }} </h3>
                        <!-- <p class = ""> {{ $Movie-> title }}</p> -->
                    </div>

                </div>


            </div>
        </section>


    </div>
</div>

<div class=" text-light">
    <div class="row  text-light">
        <p>More Like this</p>
        @forelse ($Movie->take(3) as $Movie)
        <div class="col-2">
            <div class="col gy-5 my-6 p-6 bg-dark border-b ms-2 border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('movies.show', $Movie) }}">
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
            <h5 class="card-title text-center text-danger fs-1">Benflix</h5>
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
            <a href="{{ route('movies.edit', $Movie) }}" class="btn-link ml-auto">Edit</a>

            <!-- delete button is wrapped in a form, with the delete method. -->
            <form action="{{ route('movies.destroy', $Movie) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
        </div>
    </div>

    @endsection