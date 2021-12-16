@extends('layouts.app')

@section('content')
    <div class="flex justify-center w-screen">
        <div class="flex flex-col w-3/12 gap-4">
            <div class="bg-gray-900 p-6 rounded-lg">
            Register
            </div>
            <form action="{{ route('register') }}" method="post" class="bg-white rounded-lg p-6 text-black">
            @csrf
            <div class="m-4">
                <label for="name" class="sr-only">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}" class="p-4 border-2 rounded-lg @error('name') bg-red-100 @enderror">

                @error('name')
                <div class="text-xs text-red-800 p-1">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="m-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="p-4 border-2 rounded-lg @error('email') bg-red-100 @enderror">

                @error('email')
                    <div class="text-xs text-red-800 p-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="m-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="p-4 border-2 rounded-lg @error('password') bg-red-100 @enderror">

                @error('password')
                    <div class="text-xs text-red-800 p-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="m-4">
                <label for="password_confirmation" class="sr-only">Repeat password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat password" class="p-4 border-2 rounded-lg">
            </div>

            <div class="m-4">
                <button type="submit" class="bg-green-400 p-2 px-4 cursor-pointer rounded-lg">Send »</button>
            </div>
        </form>
        </div>
        
    </div>
@endsection