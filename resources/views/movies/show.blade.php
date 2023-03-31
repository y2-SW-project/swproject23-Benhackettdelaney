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
                     
                        <tr>
                            <td class="font-bold ">age_group</td>
                            <td>{{ $Movie->age_group }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold ">title  </td>
                            <td>{{ $Movie->title }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold">description </td>
                            <td>{{ $Movie->description }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold ">duration </td>
                            <td>{{ $Movie->duration }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold ">rating </td>
                            <td>{{ $Movie->rating }}</td>
                        </tr>
                        <tr>
                            <td class="font-bold ">date </td>
                            <td>{{ $Movie->date }}</td>
                        </tr>

                      

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection