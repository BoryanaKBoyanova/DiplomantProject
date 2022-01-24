<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Find projects
        </h2>
    </x-slot>

    <div>
        <div class="mx-auto pull-right">
            <div class="flex-auto text-right mt-2">
                <form action="{{url('/search')}}" method="get">
                    <input type="get" placeholder="Search" name="search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        <table class="w-full text-md rounded mb-4">
            <thead>
            <tr class="border-b">
                <th class="text-left p-3 px-5">Topic</th>
                <th class="text-left p-3 px-5">Professor</th>
                <th class="text-left p-3 px-5">Description</th>
                <th class="text-left p-3 px-5">Image</th>
                <th class="text-left p-3 px-5">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
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

                        <a href="/edit/{{$project->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <form action="/edit/{{$project->id}}" class="inline-block">
                            <button type="submit" name="delete" formmethod="POST" class="text-sm bg-red-500 hover:bg-red-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                            {{ csrf_field() }}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
