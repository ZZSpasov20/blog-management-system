<nav {{$attributes->merge(['class'=>'w-full h-20 flex justify-around items-center border-b-textColor border-b-[1px] border-b-solid'])}} >
    <x-logo ></x-logo>
    <div class="h-full flex gap-x-6 items-center justify-between text-sm">
        <a href="/">Home</a>
        <a href="#">Posts</a>
        <a href="{{route('posts.create')}}">Write</a>
        <a href="#">My posts</a>
        @guest
            <x-button href="{{route('register')}}">Get started</x-button>
        @endguest

    </div>
    @auth
        <form method="POST" action="/logout">
            @csrf
            <button type="submit" class="bg-textColor px-6 py-2 text-white rounded">Log out</button>
        </form>
    @endauth
</nav>
