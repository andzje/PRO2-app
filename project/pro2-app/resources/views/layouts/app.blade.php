<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/css/app.css" rel="stylesheet">
        <title>SuperBlog</title>
    </head>
    <body class="text-white bg-gray-600">
        <nav class="p-6 bg-gray-900 flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <a href="{{ route('home') }}" class="p-3">Home</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Post</a>
                </li>
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">Logged in as: {{ Auth::user()->name }}</a>  
                    </li>
                    
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="p-4">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login')}}" class="p-3">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register')}}" class="p-3">Register</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>