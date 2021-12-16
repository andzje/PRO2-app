@extends('layouts.app')

@section('content')
    <div class="flex justify-center w-screen">
        <div class="flex flex-col w-3/12 gap-4">
            <div class="bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{ session('status') }}
            @endif

            <form action="{{ route('login') }}" method="post" class="bg-white rounded-lg p-6 text-black">
            @csrf
            <div class="m-4">
                <label for="email" class="sr-only">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="p-4 border-1 rounded-lg @error('email') bg-red-100 @enderror">

                @error('email')
                    <div class="text-xs text-red-800 p-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="m-4">
                <label for="password" class="sr-only">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="p-4 border-1 rounded-lg @error('password') bg-red-100 @enderror">

                @error('password')
                    <div class="text-xs text-red-800 p-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="m-4">
                <button type="submit" class="bg-transparent p-2 cursor-pointer rounded-md border-2 border-sky-400">Send »</button>
            </div>
        </form>
        </div>
        
    </div>
@endsection