<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Posts - Writeflow</x-head>

<body >
<x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" >
    <div class="w-full flex  flex-col gap-y-4 ">

        @foreach($posts as $post)
            <x-post :post="$post"></x-post>

        @endforeach

    </div>
    <div class="w-full flex justify-between ">
        {{$posts->links()}}
    </div>
</x-structure>

</body>
</html>
