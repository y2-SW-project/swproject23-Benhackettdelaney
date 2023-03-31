@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('movies.update', $Movie) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <input
                        type="text"
                        name="age_group"
                        field="age_group"
                        placeholder="age_group"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('age_group')"></input>

                    <input
                        type="text"
                        name="title"
                        field="title"
                        placeholder="title..."
                        class="w-full mt-6"
                        :value="@old('title')"></input>

                    <input
                        type="text" 
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="description..."
                        class="w-full mt-6"
                        :value="@old('description')"></input>

                    <input
                        type="text"
                        name="duration"
                        field="duration"
                        placeholder="duration level..."
                        class="w-full mt-6"
                        :value="@old('duration')"></input>

                        <input
                        type="text"
                        name="rating"
                        field="rating"
                        placeholder="rating..."
                        class="w-full mt-6"
                        :value="@old('rating')"></input>

                        <input
                        type="text"
                        name="date"
                        field="date"
                        placeholder="date..."
                        class="w-full mt-6"
                        :value="@old('date')"></input>

                      
                <div class="form-check">
                    <input class="form-check-input" type="radio"   name="new_releases" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio"   name="new_releases" value="0">
                    <label class="form-check-label" for="exampleRadios2">
                        no
                    </label>
                </div>

                    <div class="form-group">
                      

               <button class="mt-6">Save Movie</button>
                </form>
            </div>
        </div>
    </div>
@endsection