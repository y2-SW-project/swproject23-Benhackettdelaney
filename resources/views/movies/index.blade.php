<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Movies') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>
            <a href="{{ route('movies.create') }}" class="btn-link btn-lg mb-2">Add a Movie</a>
            @forelse ($movies as $Movie)
                <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <h2 class="font-bold text-2xl">
                    <a href="{{ route('movies.show', $Movie) }}"> <strong> Title </strong> {{ $Movie->title }}</a>
                    </h2>
                    <p class="mt-2">

                        <h3 class="font-bold text-1xl"> <strong> movie Title </strong>
                        {{$Movie->movie->title}} </h3>
                        {{$Movie->price}}

                    </p>

                </div>
            @empty
            <p>No Movies</p>
            @endforelse
      
            {{-- {{$movies->links()}} --}}
        </div>
    </div>
</x-app-layout>