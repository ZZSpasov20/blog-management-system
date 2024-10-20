@props(['postId'=>null, 'published'=>false])

@if ($errors->any())
    <div>
        @foreach($errors->all() as $error)
            <p class="text-sm text-red-500 pl-1 font-semibold">{{$error}}</p>
        @endforeach
    </div>
@endif
<div class="w-full flex">
    @if($published)
        <form action="{{ route('comments.store', $postId) }}" method="POST" class="flex flex-col justify-start items-start w-full" >
            @csrf
            <x-form-textarea
                name="content"
                placeholder="Leave a comment"
                textSize="text-lg"
            ></x-form-textarea>
            <x-form-button
                class="px-6   self-end text-sm"
            >
                Add comment
            </x-form-button>
        </form>

    @else
        <p class="text-lg">The page is currently in draft. Published it and receive feedback by people's comments.</p>
    @endif
</div>

<script>
    const textareas = document.getElementsByClassName('textarea');

    Array.from(textareas).forEach(textarea => {
        textarea.addEventListener('input', function () {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });
    });
</script>
