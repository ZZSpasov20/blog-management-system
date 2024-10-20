@php use App\Models\Post;use App\Models\User; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head>Home - Writeflow</x-head>
<body >

    <x-structure positionOfContent="justify-center">
        @guest
            <h1 class="text-8xl text-textColor ">Technology <br>articles & news</h1>
            <p class="text-xl  text-textColor overflow-hidden  border-r-2 border-r-solid border-r-textColor text-nowrap w-fit" id="typing-container" ></p>
            <x-button href="{{route('register')}}" size="xl" >Start reading</x-button>
        @endguest
        @auth
            <div class="w-full h-[400px] bg-red-600">

            </div>
        @endauth
    </x-structure>

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
</body>
</html>
