@extends('layouts.app')

@section('content')

<?php
$array = array(
    "title1" => "Comedy movies",
    "title2" => "Kids and family movies",
    "title3" => "Recently added movies",
    "title4" => "Horror movies",
    "title5" => "Action and adventure movies ",
    "title6" => "Drama movies ",
);
?>
<div>
    <div class="row justify-content-center bg-dark">
      

    <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div>
                        @foreach ($movies->take(1) as $Movie)
                        <a href="{{ route('newreleases.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
  
    

    <div>
        <div class="row justify-content-center bg-dark">
            @forelse ($movies->take(5) as $Movie)

            <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('newreleases.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="344" height="194">
                </a>
            </div>
            @empty
            @endforelse
        </div>

        <div class="row justify-content-center bg-dark">
            @forelse ($movies as $Movie)

            
            <div class="row justify-content-center bg-dark">
            @forelse ($array as $title)
            <div class="text-light ">
                {{ $title }}
            </div>
            @forelse ($movies->take(5) as $Movie)

            <div class="col gy-5 my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('newreleases.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="344" height="194">
                </a>
            </div>
            @empty
            @endforelse
            @empty
            @endforelse


        </div>

        <div class="card text-center bg-dark">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Benflix</h5>
    <div class = "row">
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">Help</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">2023-2023 , Benflix.com,inc or its affiliates</a>
    </div>
</div>
  
        

            <!-- <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('newreleases.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="867" height="548">
                </a>
            </div>
            @empty
            @endforelse
        </div>

        <div class="row justify-content-center bg-dark">
            @forelse ($movies as $Movie)

            <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
               <h2 class = "text-md-centre light">
                    Benflix
               </h2>
            </div>
            @empty
            @endforelse
        </div> -->

        <a href="{{ route('newreleases.create') }}" class="btn btn-primary">Create</a>
    </div>


    @endsection