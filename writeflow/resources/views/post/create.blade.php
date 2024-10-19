<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Write a post - Writeflow</x-head>

<body >

    <x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" :footer='false'>
        <div class="w-full flex mt-16 ">
            <form action="/posts" method="POST" class="flex flex-col bg-red-600 " id="post_form">
                @csrf
                <x-form-textarea name="title" maxlength="250" class="font-postTitle textarea"></x-form-textarea>
                <x-form-textarea name="content" textSize="text-xl" placeholder="Write your blog here..." class="font-postTitle textarea  "></x-form-textarea>
            </form>
        </div>
        <div class="w-full h-20  fixed bottom-0 left-0 border-t-textColor border-t-[1px] border-t-solid flex items-center pl-20 pr-20 bg-white">
            <a href="{{route('index')}}"><button class="px-8 py-1  flex justify-center items-center rounded-3xl  border-solid border-red-500 border-[1px]">Exit</button></a>
            <input
                   form="post_form"
                   type="submit"
                   value="Save as drafts"
                   name="draft"
                   class="px-8 py-1 text-gray-500 flex justify-center items-center mr-10 ml-auto    border-none " >
            <input
                form="post_form"
                type="submit"
                value="Publish"
                name="publish"
                class="px-8 py-1 flex justify-center items-center rounded-3xl border-solid border-green-500 border-[1px]" >
        </div>
        @if ($errors->any())
            <ul>{!! implode('', $errors->all('<li style="color:red">:message</li>')) !!}</ul>
        @endif
    </x-structure>

    <script>
        const textareas = document.getElementsByClassName('textarea');

        Array.from(textareas).forEach(textarea => {
            textarea.addEventListener('input', function () {
                this.style.height = 'auto';
                this.style.height = this.scrollHeight + 'px';
            });
        });
    </script>


</body>
</html>
