<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Movie') }}
        </h2>
    </x-slot>

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

                    <div class="form-group">
                      

               <x-primary-button class="mt-6">Save Movie</x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>