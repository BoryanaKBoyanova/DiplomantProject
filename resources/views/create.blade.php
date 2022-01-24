<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">

                <form method="POST" action="/create" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for=topic>Topic:</label><br>
                        <input name="topic" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"></input>

                        @if ($errors->has('topic'))
                            <span class="text-danger">{{ $errors->first('topic') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="professor">Professor:</label><br>
                        <input name="professor" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-50 focus:outline-none focus:bg-white"></input>
                        @if ($errors->has('professor'))
                            <span class="text-danger">{{ $errors->first('professor') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label><br>
                        <input name="description" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-50 focus:outline-none focus:bg-white"></input>
                        @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="custom-file bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                            <label for="file" class="custom-file-label">Select a file</label>
                            <br>
                            <input type="file" name="image" />
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add Project</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
