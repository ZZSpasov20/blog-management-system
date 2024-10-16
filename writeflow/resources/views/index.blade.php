@php use App\Models\Post;use App\Models\User; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Writeflow</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <!-- Styles / Scripts -->

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif


</head>
<body >
    <header class="w-full min-h-[650px] h-screen flex flex-col items-center">
        <x-nav class="border-b-textColor border-b-[1px] border-b-solid"></x-nav>
        <div class="w-[90%]  max-w-[1200px] flex justify-center  items-start flex-grow flex-col gap-y-14 ">
            <h1 class="text-8xl text-textColor ">Technology <br>articles & news</h1>
            <p class="text-xl  text-textColor overflow-hidden  border-r-2 border-r-solid border-r-textColor text-nowrap w-fit" id="typing-container" ></p>
            <x-button href="{{route('index')}}" size="xl" >Start reading</x-button>
        </div>
        <x-footer class="border-t-textColor border-t-[1px] border-t-solid"></x-footer>
    </header>

    <script>
        // JavaScript for Typing Effect
        const texts = ["A place to read, write, and deepen your understanding of modern technologies"];
        const typingContainer = document.getElementById("typing-container");
        let currentTextIndex = 0;
        let currentText = "";
        let typingSpeed = 20;
        function type() {
            const text = texts[currentTextIndex];
            currentText = text.substring(0, currentText.length + 1);

            typingContainer.innerHTML = currentText;

            let typingDelay =  typingSpeed;

          if (currentText === "") {
                currentTextIndex++;
                if (currentTextIndex === texts.length) {
                    currentTextIndex = 0;
                }
            }

            setTimeout(type, typingDelay);

        }

        document.addEventListener("DOMContentLoaded", function () {
            type();

        });
    </script>
    <!--Just to test if register and login works
    <h1 class="text-orange-400">Register</h1>
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

    <h1 class="font-logoFont">Login</h1>
    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" id="email">
        <input type="text" name="password" id="password">

        <input type="submit">
    </form>
    <h1>Log out</h1>
    <form method="POST" action="/logout">
        @csrf
        <input type="submit">
    </form>

    @auth
        <h1>You are innnnnNNNNnNnNNnNNnN</h1>
    @endauth-->
</body>
</html>
