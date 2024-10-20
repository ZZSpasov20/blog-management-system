<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Saved - Writeflow</x-head>

<body >
<x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" >
    <div class="w-full flex  flex-col gap-y-4 ">
    @if($saves->isEmpty())
        <p class="text-textColor text-lg">Sorry, but you don't have any saved posts.</p>

    @else
        @foreach($saves as $save)
                <x-post :post="$save['post']"></x-post>
        @endforeach
    @endif


    </div>
    <div class="w-full flex justify-between ">
        {{$saves->links()}}
    </div>
</x-structure>

</body>
</html>
