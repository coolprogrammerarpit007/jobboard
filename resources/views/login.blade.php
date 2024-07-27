@extends('layout')
@section('content')
<div class="mx-4">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Log In
            </h2>
            <p class="mb-4">Log in to post gigs</p>
        </header>


        <form action="{{url('/')}}/login" method="POST">
            @csrf
            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Email</label
                >
                <input
                    type="email"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />
                <p class="text-red-500 ">
                    @error('email')
                        {{$message}}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label
                    for="password"
                    class="inline-block text-lg mb-2"
                >
                    Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password"
                />
                <p>
                    @error('password')
                        {{$message}}
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <input type="submit" value="Sign In" class="bg-[green] text-white rounded p-[0.5rem]">
            </div>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-laravel"
                        >Register</a
                    >
                </p>
            </div>
        </form>
    </div>
</div>
@endsection