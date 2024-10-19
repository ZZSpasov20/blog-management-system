<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Your posts - Writeflow</x-head>

<body >
    <x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" >
        <div class="w-full flex  flex-col gap-y-4 ">
            <h1 class="text-3xl text-textColor">Posts by {{ $user->firstname }}</h1>

            @foreach($posts as $post)
                <x-post :post="$post"></x-post>

            @endforeach

        </div>
    </x-structure>

</body>
</html>
