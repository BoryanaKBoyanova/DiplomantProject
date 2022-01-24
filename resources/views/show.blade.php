<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage your projects
        </h2>
        <div class="flex-auto text-right mt-2">
            <a href="/search" class="text-right bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Find your project</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <div class="flex">
                    <div class="flex-auto text-2xl mb-4">Projects List</div>

                    <div class="flex-auto text-right mt-2">
                        <a href="/create" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Add new Project</a>
                    </div>

                </div>

                <table class="w-full text-md rounded mb-4">
                    <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Topic</th>
                        <th class="text-left p-3 px-5">Professor</th>
                        <th class="text-left p-3 px-5">description</th>
                        <th class="text-left p-3 px-5">Photo</th>
                        <th class="text-left p-3 px-5">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Project::all() as $project)
                        <tr class="border-b hover:bg-orange-100">
                            <td class="p-3 px-5">
                                {{$project->topic}}
                            </td>
                            <td class="p-3 px-5">
                                {{$project->professor}}
                            </td>
                            <td class="p-3 px-5">
                                {{$project->description}}
                            </td>
                            <td class="p-3 px-5">
                                <img src="{{$project->image}}" width="100px" height="100px">
                            </td>
                            <td class="p-3 px-5">

                                <a href="/edit/{{$project->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="/edit/{{$project->id}}" class="inline-block">
                                    <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>
