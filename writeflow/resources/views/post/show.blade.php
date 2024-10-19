<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Your posts - Writeflow</x-head>

<body >
<x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" >
    <div class="w-full flex  flex-col gap-y-4 ">
        <h1 class="text-5xl text-textColor font-bold pb-1">{{$post['title']}}</h1>
        <p class="text-lg"><span class="font-bold pr-1">Creator:</span> {{$post['user']['firstname']}} {{$post['user']['lastname']}} | {{$post['user']['email']}}</p>
        <p class="text-lg pt-2">{{$post['content']}}</p>
    </div>
</x-structure>

</body>
</html>
