@php use App\Models\Post;use App\Models\User; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
</head>
<body >
    <!--Just to test if register and login works-->

    <form method="POST" action="/register">
        @csrf
        <input type="text" name="firstname" id="firstname">
        <input type="text" name="lastname" id="lastname">
        <input type="email" name="email" id="email">
        <input type="text" name="password" id="password">
        <input type="text" name="password_confirmation" id="password_confirmation">
        <input type="submit">
    </form>
    @error('email' )
    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
    @enderror
    @error('firstname' )
    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
    @enderror
    @error('lastname' )
    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
    @enderror
    @error('password' )
    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
    @enderror


    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" id="email">
        <input type="text" name="password" id="password">

        <input type="submit">
    </form>
    <form method="POST" action="/logout">
        @csrf

        <input type="email" name="email" id="email">
        <input type="text" name="password" id="password">

        <input type="submit">
    </form>

    @auth
        <h1>You are innnnnNNNNnNnNNnNNnN</h1>
    @endauth
</body>
</html>
