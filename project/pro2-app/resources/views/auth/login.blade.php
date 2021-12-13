@extends('layouts.app')

@section('content')
    <div class="flex justify-center w-screen">
        <div class="flex flex-col w-3/12 gap-4">
            <div class="bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{ session('status') }}
            @endif

            <form action="{{ route('login') }}" method="post" class="bg-white rounded-lg p-6">
            @csrf
            <div class="m-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="bg-gray-100 w-full border-2 rounded-lg @error('email') bg-red-100 @enderror">

                @error('email')
                    <div class="text-xs text-red-800 p-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="m-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-100 w-full border-2 rounded-lg @error('password') bg-red-100 @enderror">

                @error('password')
                    <div class="text-xs text-red-800 p-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
                <button type="submit" class="bg-green-400 p-2 px-4 cursor-pointer rounded-lg">Send »</button>
            </div>
        </form>
        </div>
        
    </div>
@endsection