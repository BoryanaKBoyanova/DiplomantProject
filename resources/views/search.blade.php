@extends('layout')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Find projects
        </h2>
    </x-slot>

        <div class="py-12">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <form style="text-align: center" action="{{url('/search')}}" method="get">
                    <input type="get" placeholder="Search" name="search">
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <br>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                    <div class="flex">
                        <div class="flex-auto text-2xl mb-4">Projects List</div>
        <div class="mx-auto pull-right">
            <div class="flex-auto text-right mt-2">

            </div>
        </div>
    </div>

        <table class="w-full text-md rounded mb-4">
            <thead>
            <tr class="border-b">
                <th class="text-left p-3 px-5" style="text-align: center">Topic</th>
                <th class="text-left p-3 px-5" style="text-align: center">Professor</th>
                <th class="text-left p-3 px-5" style="text-align: center">Description</th>
                <th class="text-left p-3 px-5">Image</th>
                <th class="text-left p-3 px-5" style="text-align: center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr class="border-b hover:bg-orange-100">
                    <td class="p-3 px-5" style="text-align: center">
                        {{$project->topic}}
                    </td>
                    <td class="p-3 px-5" style="text-align: center">
                        {{$project->professor}}
                    </td>
                    <td class="p-3 px-5" style="text-align: center">
                        {{$project->description}}
                    </td>
                    <td class="p-3 px-5">
                        <img src="{{$project->image}}" width="100px" height="100px">
                    </td>
                    <td class="p-3 px-5" style="text-align: center">

                        <a href="/edit/{{$project->id}}" name="edit" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-black py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                        <form action="/edit/{{$project->id}}" class="inline-block">
                            <br>
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
@endsection
