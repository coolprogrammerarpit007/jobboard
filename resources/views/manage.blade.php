@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
@php
    $listing = $listing->all();
@endphp
<div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <header>
            <h1
                class="text-3xl text-center font-bold my-6 uppercase"
            >
                Manage Gigs
            </h1>
        </header>

        <table class="w-full table-auto rounded-sm">
            <tbody>
                @foreach ($listing as $item)
                    <tr class="border-gray-300">
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <a href="show.html">
                                {{$item->title}}
                            </a>
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <a
                                href="/edit/{{$item->id}}"
                                class="text-blue-400 px-6 py-2 rounded-xl"
                                ><i
                                    class="fa-solid fa-pen-to-square"
                                ></i>
                                Edit</a
                            >
                        </td>
                        <td
                            class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                        >
                            <div>
                                <a href="/delete/{{$item->id}}">
                                    <button class="text-red-600">
                                        <i
                                            class="fa-solid fa-trash-can"
                                        ></i>
                                        Delete
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach           
            </tbody>
        </table>
    </div>
</div>
@endsection