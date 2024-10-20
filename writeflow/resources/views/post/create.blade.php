<!DOCTYPE html>
<html lang="en" class="h-full">
<x-head>Write - Writeflow</x-head>

<body >

    <x-structure positionOfContent="justify-start" maxWidth="max-w-[700px]" :footer='false'>
        @if ($errors->any())
            <div>
                @foreach($errors->all() as $error)
                    <p class="text-sm text-red-500 pl-1 font-semibold">{{$error}}</p>
                @endforeach
            </div>

        @endif
        <div class="w-full flex  ">
            <form action="/posts" method="POST" class="flex flex-col " id="post_form">
                @csrf
                <x-form-textarea name="title" maxlength="250" class="font-postTitle textarea"></x-form-textarea>
                <x-form-textarea name="content" textSize="text-xl" placeholder="Write your blog here..." class="font-postTitle textarea  "></x-form-textarea>
            </form>
        </div>
        <div class="w-full h-20  fixed bottom-0 left-0 border-t-textColor border-t-[1px] border-t-solid flex items-center pl-20 pr-20 bg-white justify-between">
            <a href="{{route('index')}}"><button class="px-10 py-2 text-white rounded-md cursor-pointer transition-all duration-700  bg-textColor hover:bg-backgroundElevatedColor">Exit</button></a>
            <div class="flex gap-x-4">
                <input
                    form="post_form"
                    type="submit"
                    value="Save as drafts"
                    name="draft"
                    class="px-8 py-1 text-textColor flex justify-center cursor-pointer items-center mr-10 ml-auto    border-none " >
                <x-form-button
                    form="post_form"
                    name="publish"
                     >
                    Publish

                </x-form-button>
            </div>


        </div>
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
