@extends('layouts.app')

@section('content')
<?php
$array = array(
    "title1" => "Comedy Movies",
    "title2" => "Kids and family Movies",
    "title3" => "Horror movies",
    "title4" => "Action and adventure movies",
    "title5" => "Drama movies",
);
?>

<?php
$array2 = array(
    "title7" => "Featured "
);
?>
<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div>
                        @foreach ($movies as $Movie)
                        <a href="{{ route('newreleases.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
                    </div>
                    @break
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>

        <div class="row justify-content-center bg-dark">
            @forelse ($array as $title)
            <div class="text-light ps-3 fs-4 pt-5 pd-5">
                {{ $title }}
            </div>
            @forelse ($movies->take(5) as $Movie)

            <div class="col gy-5 my-6 p-6 bg-dark border-b ms-2 border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('newreleases.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="350" height="194">
                </a>
            </div>
            @empty
            @endforelse
            @empty
            @endforelse


        </div>

    </div>

  



  
    <div class="card text-center bg-dark">
            <div class="card-header">


            </div>
    
            <div class="card text-center bg-dark">
       
       <div class="card-body pt-5">
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




            </div>


            @endsection