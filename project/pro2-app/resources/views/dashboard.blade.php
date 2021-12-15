@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white w-4/12 rounded-lg text-center p-5">
            <h1 class="text-xl">{{ Auth::user()->name }}</h1>
            <ul>
                <li>{{ Auth::user()->email }}</li>
            </ul>
        </div>
    </div>
@endsection