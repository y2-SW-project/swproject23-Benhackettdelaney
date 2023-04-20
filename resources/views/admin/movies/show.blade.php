@extends('layouts.app')

@section('content')



<div>
    <div class="row justify-content-center bg-dark">


        <div class="col my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner b">
                    <div>
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
  
<a href="{{ route('admin.movies.edit', $Movie) }}" class="btn-link ml-auto">Edit</a>

<!-- delete button is wrapped in a form, with the delete method. -->
<form action="{{ route('admin.movies.destroy', $Movie) }}" method="post">
    @method('delete')
    @csrf
    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
</div>
@endsection