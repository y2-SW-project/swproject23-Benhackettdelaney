@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <a href="{{ route('newreleases.create') }}" class="btn btn-primary">Create</a>
    @forelse ($movies as $Movie)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('movies.show', $Movie) }}"> <strong> Title </strong> {{ $Movie->title }}</a>
                    </h2>
                    <p class="mt-2">

                        {{$Movie->price}}

                    </p>

                </div>
            @empty
            <p>No Movies</p>
            @endforelse
            {{$movies->links()}}

    </div>
</div>
@endsection
