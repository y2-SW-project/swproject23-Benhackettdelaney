@extends('layouts.app')

@section('content')
<?php
$array = array(
    "title1" => "Emmy-winning TV Movies ",
    "title2" => "Trending Now",
    "title3" => "Drama Movies",
    "title4" => "Drama Programmes",
    "title5" => "Watch it Again ",
    "title6" => "Continue watching ",
);
?>

<?php
$array2 = array(
    "title7" => "Featured "
);
?>
<div>
    <div class="row justify-content-center">


        <div class="col my-6 p-6  ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div>
                        @foreach ($movies as $Movie)
                        <a href="{{ route('movies.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
                    </div>
                    @break
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>

        <div class="row  p-3 justify-content-center isplay-second">
            @forelse ($array as $title)
            <div class="text-light ps-3 fs-4 pt-5">
                {{ $title }}
            </div>
            @forelse ($movies->take(5) as $Movie)

            <div class="col gy-5 border-b  border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('movies.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="350" height="194">
                </a>
            </div>
            @empty
            @endforelse
            @empty
            @endforelse


        </div>

    </div>

    <div class="row justify-content-center  ">
        @forelse ($array2 as $title)
        <div class="text-light ps-3 fs-4 pt-5">
            {{ $title }}
        </div>

        @forelse ($movies->take(4) as $Movie)

        <div class="col gy-5 my-6 p-6  border-b border-gray-200 shadow-sm sm:rounded-lg ms-5">
            <a href="{{ route('movies.show', $Movie) }}">
                <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="867" height="548">
            </a>
        </div>
        @empty
        @endforelse
        @empty
        @endforelse


    </div>
    <h5 class="card-title text-center text-danger mt-5 fs-1">Benflix</h5>
<p class="text-light text-center mt-2">2023-2023 , Benflix.com,inc or its affiliates</p>
<div class="card text-center bg-black">

    <div class="card-body">

        <div class="d-flex fs-5 justify-content-evenly align-items-center">
            <div class=" ">
                <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
            </div>
            <div class=" ">
                <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
            </div>
            <div class="">
                <p class=<p><a class="link-opacity-10" href="#">Help</a>
            </div>
            <div class="">
                <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
            </div>

        </div>





                <a href="{{ route('movies.create') }}" class="btn btn-primary">Create</a>
            </div>


            @endsection