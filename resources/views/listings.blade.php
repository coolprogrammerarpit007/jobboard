<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layout')
    @section('content')
        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
            @if (count($listings) > 0)
                @foreach ($listings as $listing)
                    <div class="bg-gray-50 border border-gray-200 rounded p-6">
                        <div class="flex">
                            <img class="hidden w-48 mr-6 md:block" src="images/acme.png" alt="" width="100" />
                            <div>
                                <h3 class="text-2xl">
                                    <a href="show.html">{{ $listing->title }}</a>
                                </h3>
                                <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
                                <ul class="flex">
                                    <li
                                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                        <a href="#">Laravel</a>
                                    </li>
                                    <li
                                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                        <a href="#">API</a>
                                    </li>
                                    <li
                                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                        <a href="#">Backend</a>
                                    </li>
                                    <li
                                        class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                                        <a href="#">Vue</a>
                                    </li>
                                </ul>
                                <div class="text-lg mt-4">
                                    <i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="">There are No Job Listings</h3>
            @endif
        </div>
    @endsection
    <footer
        class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Post Job</a>
    </footer>
</body>

</html>
