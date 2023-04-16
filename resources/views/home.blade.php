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
    "title7" => "featured ",
);
?>
<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div>
                        @foreach ($movies->take(1) as $Movie)
                        <a href="{{ route('movies.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>

        <div class="row justify-content-center bg-dark">
            @forelse ($array as $title)
            <div class="text-light ">
                {{ $title }}
            </div>
            @forelse ($movies->take(5) as $Movie)

            <div class="col gy-5 my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('movies.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="344" height="194">
                </a>
            </div>
            @empty
            @endforelse
            @empty
            @endforelse


        </div>

   


        <a href="{{ route('newreleases.create') }}" class="btn btn-primary">Create</a>
    </div> 


        @endsection