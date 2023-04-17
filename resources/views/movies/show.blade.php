@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form action="{{ route('movies.edit', $Movie) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <input type="text" name="age_group" field="age_group" placeholder="age_group" class="w-full" autocomplete="off" :value="@old('age_group')"></input>

                <input type="text" name="title" field="title" placeholder="title..." class="w-full mt-6" :value="@old('title')"></input>

                <input type="text" name="description" rows="10" field="description" placeholder="description..." class="w-full mt-6" :value="@old('description')"></input>

                <input type="text" name="duration" field="duration" placeholder="duration level..." class="w-full mt-6" :value="@old('duration')"></input>

                <input type="text" name="rating" field="rating" placeholder="rating..." class="w-full mt-6" :value="@old('rating')"></input>

                <input type="text" name="date" field="date" placeholder="date..." class="w-full mt-6" :value="@old('date')"></input>

                <div class="form-group">
                    <label for="image_id">Presenting image</label>
                    <input type="file" name="image_id" title="image_id" field="image_id" class="form-control-file" id="image_id">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="new_releases" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="new_releases" value="0">
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

<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div>
                        <a href="{{ route('movies.show', $Movie) }}">
                            <img src="{{ asset('storage/images/' . $Movie->image_id) }}" width="1920" height="721">
                            <button type="button" class="btn-close" aria-label="Close">Buy Movie</button>
                    </div>
                
                </div>
            </div>
        </div>
    </div>

      
    <div class="card text-center bg-dark">
  <div class="card-header">

  </div>
  <div class="card-body">
    <h5 class="card-title text-danger">Benflix</h5>
    <div class = "row">
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">Help</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
    </div>
    <div class = "col-2">
    <p class=<p><a class="link-opacity-10" href="#">2023-2023 , Benflix.com,inc or its affiliates</a>
    </div>
</div>
  
@endsection