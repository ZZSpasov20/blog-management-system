@props(['post'=>null])
<div class="w-[680px] h-auto flex flex-col border-b-[1px] border-b-textColor/20 border-b-solid py-10">
    <div class="flex gap-x-2 flex-col gap-y-3">
        <div class="flex justify-between pb-4">
            <p class="text-sm text-textColor"><span class="font-bold pr-1">Creator:</span> {{$post['user']['firstname']}} {{$post['user']['lastname']}} | {{$post['user']['email']}}</p>
            <p class="text-sm text-textColor">
                <span class="font-bold pr-1">Date:</span>
                @if($post->published)
                    {{$post['published_at']}}
                @else
                    draft
                @endif
            </p>
        </div>
        <p class="text-3xl text-textColor font-bold w-[460px] ">{{$post['title']}}</p>
        <a href="/posts/{{ $post['id'] }}" class="text-blue-600">See more</a>
    </div>
</div>
