<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Your posts - Writeflow</x-head>

<body >
<x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" :footer="false">
    @if ($errors->any())
        <div>
            @foreach($errors->all() as $error)
                <p class="text-sm text-red-500 pl-1 font-semibold">{{$error}}</p>
            @endforeach
        </div>

    @endif
    <div class="w-full flex  flex-col gap-y-4 ">
        <h1 class="text-3xl text-textColor pl-2">Edit your post</h1>
        <form action="/posts/{{$post['id']}}" method="POST" id="edit_form">
            @csrf
            @method('PATCH')

            <textarea
                name="title"
                class="outline-none  w-full pl-2 placeholder-gray-400  resize-none  h-full
               flex items-center text-textColor text-5xl pb-1 textarea font-bold">{{$post['title']}}</textarea>
            <textarea
                name="content"
                class="outline-none  w-full pl-2 placeholder-gray-400  resize-none  h-full
               flex items-center text-textColor text-lg pb-1 textarea ">{{$post['content']}}</textarea>
        </form>
    </div>
    @can('edit', $post)
        <div class="w-full h-20  fixed bottom-0 left-0 border-t-textColor border-t-[1px] border-t-solid flex items-center pl-20 pr-20 bg-white justify-between">
            <a href="{{route('posts.show', $post)}}"><button class="px-10 py-2 text-white rounded-md cursor-pointer transition-all duration-700  bg-textColor hover:bg-backgroundElevatedColor">Exit</button></a>

                <x-form-button
                    name="update"
                    form="edit_form"
                >
                    Save changes
                </x-form-button>

        </div>
    @endcan
</x-structure>


<script>
    const textareas = document.getElementsByClassName('textarea');

    Array.from(textareas).forEach(function(textarea) {
        textarea.style.height = 'auto';
        textarea.style.height = textarea.scrollHeight + 'px';
    });


    Array.from(textareas).forEach(textarea => {
        textarea.addEventListener('input', function () {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    });
</script>
</body>
</html>
