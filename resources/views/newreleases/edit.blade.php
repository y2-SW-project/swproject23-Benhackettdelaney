@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form action="{{ route('movies.update', $Movie) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class = "justify-content-center bg-dark row ms-5 fs-4 me-3 mt-5 pt-5">
                    <div class = "col-2">
                    <label class=" text-light" for="exampleRadios1">
                    Age Group
                    </label>
                <input type="text" name="age_group" field="age_group" placeholder="age group..." class="w-full" autocomplete="off" :value="@old('age group..')"></input>
                </div>
                <div class = "col-2">
                <label class=" text-light" for="exampleRadios1">
                Title
                    </label>
                <input type="text" name="title" field="title" placeholder="title..." class="w-full mt-6" :value="@old('title')"></input>
                </div>
                <div class = "col-2">
                <label class=" text-light" for="exampleRadios1">
                Description
                    </label>
                <input type="text" name="description" rows="10" field="description" placeholder="description..." class="w-full mt-6" :value="@old('description')"></input>
                </div>
                <div class = "col-2">
                <label class=" text-light" for="exampleRadios1">
                Duration
                    </label>
                <input type="text" name="duration" field="duration" placeholder="duration ..." class="w-full mt-6" :value="@old('duration')"></input>
                </div>
                <div class = "col-2">
                <label class=" text-light" for="exampleRadios1">
                Rating
                    </label>
                <input type="text" name="rating" field="rating" placeholder="rating..." class="w-full mt-6" :value="@old('rating')"></input>
                </div>
                <div class = "col-2">
                <label class=" text-light" for="exampleRadios1">
                       Release Date
                    </label>
                <input type="text" name="date" field="date" placeholder="release date..." class="w-full mt-6" :value="@old('date')"></input>
                </div>
         

                 
                <div class = "row justify-content-center">

                <div class="form-group mt-5 pt-5 justify-content-center">
                    <label for="image_id">Presenting image</label>
                    <input type="file" name="image_id" title="image_id" field="image_id" class="form-control-file justify-content-center" id="image_id">
                </div>
          

                <div class = "col-2 mt-5 my-5 ms-5">
                <div class="form-check">
                    <input class="form-check-input text-light" type="radio"   name="new_releases" value="1" checked>
                    <label class="  form-check-label text-light" for="exampleRadios1">
                       Yes
                    </label>
                </div>
                </div>

                
                <div class = "col-2 mt-5 me-5 my-5 mb-2">
                <div class="form-check">
                   
                    <label class="  form-check-label text-light" for="exampleRadios1">
                       New Release
                    </label>
                </div>
                </div>

               
                <div class = "col-2 mt-5 my-5 ms-5">
                <div class="form-check">
                    <input class="form-check-input text-light" type="radio"   name="new_releases" value="0" checked>
                    <label class="  form-check-label text-light" for="exampleRadios1">
                       No
                    </label>
                </div>
                </div>

                </div>

                <div class="form-group">
                </div>

                    <button class="mt-5 justify-content-center col-2 btn-outline-kight text-bold ">Save Movie</button>
            </form>


        </div>
        
    </div>
    
</div>

<div class="card text-center bg-dark">
            <div class="card-header">


            </div>
    
            <div class="card text-center bg-dark">
       
       <div class="card-body justify-content-center">
           <h5 class="card-title text-center text-danger fs-1">Benflix</h5>
           <div class="row">
               <div class="col-2  my-2 me-5 ps-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
               </div>
               <div class="col-2 my-2 me-5 ps-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
               </div>
               <div class="col-2 my-2 me-5 fs-5">
                   <p class=<p><a class="link-opacity-10" href="#">Help</a>
               </div>
               <div class="col-2 my-2 me-5 fs-5">
                   <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
               </div>
               <div class="col-2 my-2  fs-5 m">
                   <p class=<p><a class="link-opacity-10" href="#">2023-2023 , Benflix.com,inc or its affiliates</a>
               </div>
           </div>
           </div>
@endsection