@extends('layouts.app')

@section('content')
<div class="py-12 bg-dark">
    <div class="max-w-7xl mx-auto bg-dark sm:px-6 lg:px-8">
        <div class="my-6 p-6 bg-dark border-b border-gray-200 shadow-sm sm:rounded-lg">
            <form action="{{ route('movies.store') }}" method="post" class="d-flex p-5 align-items-center  flex-column" enctype="multipart/form-data">

                @csrf

                <div class="d-flex flex-column bg-dark fs-4">
                    <div class="d-flex my-3  flex-column">
                        <label class=" text-light mb-2" for="exampleRadios1">
                            Age Group
                        </label>
                        <input type="text" name="age_group" field="age_group" placeholder="age group..." class="w-full" autocomplete="off" :value="@old('age group..')"></input>
                    </div>
                    <div class="d-flex my-3 flex-column">
                        <label class=" text-light mb-2" for="exampleRadios1">
                            Title
                        </label>
                        <input type="text" name="title" field="title" placeholder="title..." class="w-full mt-6" :value="@old('title')"></input>
                    </div>
                    <div class="d-flex my-3 flex-column">
                        <label class=" text-light mb-2" for="exampleRadios1">
                            Description
                        </label>
                        <input type="text" name="description" rows="10" field="description" placeholder="description..." class="w-full mt-6" :value="@old('description')"></input>
                    </div>
                    <div class="d-flex my-3 flex-column">
                        <label class=" text-light mb-2" for="exampleRadios1">
                            Duration
                        </label>
                        <input type="text" name="duration" field="duration" placeholder="duration ..." class="w-full mt-6" :value="@old('duration')"></input>
                    </div>
                    <div class="d-flex my-3 flex-column">
                        <label class=" text-light mb-2" for="exampleRadios1">
                            Rating
                        </label>
                        <input type="text" name="rating" field="rating" placeholder="rating..." class="w-full mt-6" :value="@old('rating')"></input>
                    </div>
                    <div class="d-flex my-3 flex-column">
                        <label class=" text-light mb-2" for="exampleRadios1">
                            Release Date
                        </label>
                        <input type="text" name="date" field="date" placeholder="release date..." class="w-full mt-6" :value="@old('date')"></input>
                    </div>



                    <div >

                        <div class="form-group text-light mt-3">
                            <input type="file" name="image_id" title="image_id" field="image_id" class="form-control-file " id="image_id">
                        </div>

                        <section class="d-flex justify-content-start">
                        <div class="my-5">
                          

                                <label class="  form-check-label text-light" for="exampleRadios1">
                                    New Release
                                </label>
                            </div>
                    

                       
                        <div class=" mt-5 ms-3">
                           
                                <input class="form-check-input text-light" type="radio" name="new_releases" value="1" checked>
                                <label class="  form-check-label text-light" for="exampleRadios1">
                                    Yes
                                </label>
                            </div>
                       
                        
                        <div class="mt-5 ms-3">
                        
                                <input class="form-check-input text-light" type="radio" name="new_releases" value="0" checked>
                                <label class="  form-check-label text-light" for="exampleRadios1">
                                    No
                                </label>
                            </div>
                     
                     
                        </section>
                    </div>

                    <div class="form-group">
                    </div>

                    <button class="mt-3 justify-content-center btn btn-light  text-dark fs-3 ">Save Movie</button>
            </form>


        </div>

    </div>

</div>

<div class = "bg-dark">
<h5 class="card-title text-center text-danger mt-5 fs-1">Benflix</h5>
<p class="text-light text-center mt-2">2023-2023 , Benflix.com,inc or its affiliates</p>


    <div class="card-body">

        <div class="d-flex fs-5 bg-dark justify-content-evenly align-items-center">
            <div class=" ">
                <p class=<p><a class="link-opacity-10" href="#">Terms and Privacy Notice</a>
            </div>
            <div class=" ">
                <p class=<p><a class="link-opacity-10" href="#">Send us feedback</a>
            </div>
            <div class="">
                <p class=<p><a class="link-opacity-10" href="#">Help</a>
            </div>
            <div class="">
                <p class=<p><a class="link-opacity-20" href="#">Cookies Notice</a>
            </div>
            </div>
        </div>

        @endsection