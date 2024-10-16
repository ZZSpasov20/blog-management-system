<nav {{$attributes->merge(['class'=>'w-full h-20 flex justify-around items-center '])}} >
    <x-logo class=""></x-logo>
    <div class="h-full flex gap-x-6 items-center justify-between text-sm">
        <a href="/">Home</a>
        <a href="#">Posts</a>
        <a href="#">Write</a>
        <a href="#">Drafts</a>
        <x-button href="{{route('index')}}">Get started</x-button>
    </div>

</nav>
