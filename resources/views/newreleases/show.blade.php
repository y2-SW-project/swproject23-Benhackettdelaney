<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Movie Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!--alert-success is a component which I created using php artisan make:component alert-success
            have a look at the code in views/components/alert-success.blade.php -->
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

            <div class="flex">

                <!-- when EDIT BUTTON is clicked, route to admin.books.edit -->
                <a href="{{ route('movies.edit', $Movie) }}" class="btn-link ml-auto">Edit</a>

                <!-- delete button is wrapped in a form, with the delete method. -->
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
</x-app-layout>