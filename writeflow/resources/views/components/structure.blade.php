@props(['positionOfContent' => 'justify-start', 'maxWidth'=>'max-w-[1200px]', 'nav'=>true, 'footer'=>true])

<div class="w-full min-h-[650px] h-screen flex flex-col items-center">
    @if($nav)
        <x-nav></x-nav>
    @endif
    <div class="w-[90%]   flex  items-start flex-grow flex-col gap-y-14 {{$positionOfContent}} {{$maxWidth}}"
        >
        {{$slot}}
    </div>
    @if($footer)
        <x-footer></x-footer>
    @endif

</div>
