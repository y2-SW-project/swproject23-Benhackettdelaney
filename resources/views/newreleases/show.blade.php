@extends('layouts.app')

@section('content')






    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> 
     

            <div class="flex">

            <a href="{{ route('movies.edit', $Movie) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('movies.destroy', $Movie) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger ml-4" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
            </div>
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <table class="table table-hover">
                    <tbody>
                     
                <div class = "container">
                    <form action = "{{route('movies.destroy', $Movie)}}" method="post"
                    enctype="multipart/form-data">
                    @method('put')
                    @csrf  

                    
                    <div class= "from-group">
                        <label for ="age_group">Age Group</label>
                        <input type="text" class="from-control" id="title" required value = "{{$Movie->description}}"></input>
                    </div>

                    <div class= "from-group">
                        <label for ="title">Title</label>
                        <input type="text" class="from-control" id="title" required value = "{{$Movie->title}}">
                    </div>

                    <div class= "from-group">
                        <label for ="description">Description</label>
                        <input type="text" class="from-control" id="title" required value = "{{$Movie->description}}"></input>
                    </div>

                    <div class= "from-group">
                        <label for ="duration">Duration</label>
                        <input type="text" class="from-control" id="title" required value = "{{$Movie->duration}}"></input>
                    </div>

                    <div class= "from-group">
                        <label for ="rating">rating</label>
                        <input type="text" class="from-control" id="title" required value = "{{$Movie->rating}}"></input>
                    </div>

                    <div class= "from-group">
                        <label for ="date">Date</label>
                        <input type="text" class="from-control" id="title" required value = "{{$Movie->date}}"></input>
                    </div>

                </form> 
                </div>

                      

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection