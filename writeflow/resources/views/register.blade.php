<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Register - Writeflow</x-head>
<body class="flex justify-center items-center h-full">

    <form action="/register" method="POST" class="flex flex-col gap-y-4 shadow-lg px-32 py-20">
        <a href="{{route('index')}}"><x-logo class="text-xl"></x-logo></a>
        @csrf
        <h1 class="text-textColor text-3xl pb-10">Register now</h1>
        <x-form-field name="firstname"></x-form-field>
        <x-form-field name="lastname"></x-form-field>
        <x-form-field name="email" type="email"></x-form-field>
        <x-form-field name="password" type="password" :password="true"></x-form-field>
        <x-form-field name="password_confirmation" type="password" :password="true" placeholder="Confirm password"></x-form-field>

        <p class="text-sm text-textColor">Already have an account? <a href="{{route("login")}}" class="text-blue-500 ">Log in now.</a></p>
        <x-form-button class="mt-10">Register</x-form-button>
    </form>
</body>
</html>
