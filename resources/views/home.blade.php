@extends('layouts.app')

@section('content')


<div>
    <div class="row justify-content-center">
        @forelse ($movies as $Movie)

        <div class="col my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
            <a href="{{ route('movies.show', $Movie) }}">
                <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="344" height="194">
            </a>
        </div>

        @empty
        <p>No Movies</p>
        @endforelse
        {{$movies->links()}}

    </div>
    <a href="{{ route('newreleases.create') }}" class="btn btn-primary">Create</a>

</div>

@endsection