@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('movies.store') }}" method="post" enctype="multipart/form-data">
                    
                    @csrf
                    <input
                        type="text"
                        name="age_group"
                        field="age_group"
                        placeholder="age_group"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('age group..')"></input>

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

                        
                        <input
                        type="text"
                        name="new_releases"
                        field="new_releases"
                        placeholder="new_releases..."
                        class="w-full mt-6"
                        :value="@old('new releases')"></input>

                    

                    <div class="form-group">
                       

                    <button class="mt-6">Save Movie</button>
                </form>
            </div>
        </div>
    </div>
@endsection