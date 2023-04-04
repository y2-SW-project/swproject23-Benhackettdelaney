@extends('layouts.app')

@section('content')
<div></div>
<div class="container bg-dark">
    <div class="row justify-content-center">
       
    @forelse ($movies as $Movie)
    <div class = "container bg-dark">
    <div class = "row ">
        <div class = "col-2">
        <a href = "{{route('newreleases.show', $Movie) }}"><img src="{{ asset('storage/images/' . $Movie->image_id) }}" width = "344" height = "194">
        </div>

                <!-- <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('newreleases.show', $Movie) }}"> <strong> Title </strong> {{ $Movie->title }}</a>
                    </h2>
                    <p class="mt-2"> -->

                        {{$Movie->price}}

                    <!-- </p>

                </div> -->
            @empty
            <p>No Movies</p>
            @endforelse

    </div>
</div>
@endsection
