@extends('layouts.app')

@section('content')


<div>
    <div class="row justify-content-center bg-dark">
      

        <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner"> <div>
                @forelse ($movies as $Movie)
                        <a href="{{ route('movies.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
                    </div>
                    @empty
            @endforelse
                </div>
            </div>
        </div>
    </div>
  
    <div>
        <div class="row justify-content-center bg-dark">
            @forelse ($movies as $Movie)

            <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('movies.show', $Movie) }}">
                    <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="344" height="194">
                </a>
            </div>
            @empty
            @endforelse
        </div>

        <div class="row justify-content-center bg-dark">
            @forelse ($movies as $Movie)

            <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('movies.show', $Movie) }}">
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
        </div>

        <a href="{{ route('newreleases.create') }}" class="btn btn-primary">Create</a>
    </div>


    @endsection