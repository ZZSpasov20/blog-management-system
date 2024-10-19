<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Your posts - Writeflow</x-head>

<body >
<x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" :footer="false">
    <div class="w-full flex  flex-col gap-y-4 ">
        <h1 class="text-5xl text-textColor font-bold pb-1">{{$post['title']}}</h1>
        <div class="flex flex-col gap-y-1">
            <p class="text-lg"><span class="font-bold pr-1">Creator:</span> {{$post['user']['firstname']}} {{$post['user']['lastname']}} | {{$post['user']['email']}}</p>

            <p class="text-lg"> <span class="font-bold pr-1">Published at:</span>
                @if($post['published'])
                    {{$post['published_at']}}
                @else
                    draft
                @endif

            </p>
        </div>
        <p class="text-lg pt-2 break-words text-textColor">{{$post['content']}}</p>
    </div>
    @can('edit', $post)
        <div class="w-full h-20  fixed bottom-0 left-0 border-t-textColor border-t-[1px] border-t-solid flex items-center pl-20 pr-20 bg-white justify-between">
            <form action="/posts/{{$post['id']}}" class="flex" method="POST">
                @csrf
                @method('DELETE')
                <x-form-button
                    name="publish"
                >
                    Delete
                </x-form-button>

            </form>
            @if($post['published']===0)
                <div class="flex gap-x-4">
                    <a href="/posts/{{ $post['id'] }}/edit" class="px-10 py-2 text-white rounded-md cursor-pointer transition-all duration-700  bg-textColor hover:bg-backgroundElevatedColor">Edit</a>
                    <form action="/posts/{{$post['id']}}" class="flex" method="POST">
                        @csrf
                        @method('PATCH')

                        <x-form-button
                            name="publish"
                        >
                            Publish
                        </x-form-button>
                    </form>
                </div>


            @endif
        </div>
    @endcan
</x-structure>



</body>
</html>
