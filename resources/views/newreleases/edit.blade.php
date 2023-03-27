@extends('layouts.app')

@section('content')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <form action="{{ route('movies.update', $Movie) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <x-text-input
                        type="text"
                        name="age_group"
                        field="age_group"
                        placeholder="age_group"
                        class="w-full"
                        autocomplete="off"
                        :value="@old('age_group')"></x-text-input>

                    <x-text-input
                        type="text"
                        name="title"
                        field="title"
                        placeholder="title..."
                        class="w-full mt-6"
                        :value="@old('title')"></x-text-input>

                    <x-text-input
                        type="text" 
                        name="description"
                        rows="10"
                        field="description"
                        placeholder="description..."
                        class="w-full mt-6"
                        :value="@old('description')"></x-text-input>

                    <x-text-input
                        type="text"
                        name="duration"
                        field="duration"
                        placeholder="duration level..."
                        class="w-full mt-6"
                        :value="@old('duration')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="rating"
                        field="rating"
                        placeholder="rating..."
                        class="w-full mt-6"
                        :value="@old('rating')"></x-text-input>

                        <x-text-input
                        type="text"
                        name="date"
                        field="date"
                        placeholder="date..."
                        class="w-full mt-6"
                        :value="@old('date')"></x-text-input>

                    <div class="form-group">
                        <label for="newreleases">newreleases</label>
                        <select name="newreleases_id">
                          @foreach ($newreleases as $newreleases)
                            <option value="{{$newreleases->id}}" {{(old('newreleases_id') == $newreleases->id) ? "selected" : ""}}>
                              {{$newreleases->title}}
                            </option>
                          @endforeach
                     </select>

               <x-primary-button class="mt-6">Save Movie</x-primary-button>
                </form>
            </div>
        </div>
    </div>
@endsection