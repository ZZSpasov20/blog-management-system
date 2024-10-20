@props(['comment'=>null])
<div class="w-full h-auto flex flex-col shadow
py-5 px-5">
    <div class="flex gap-x-2 flex-col gap-y-3">
        <div class="flex justify-between pb-4">
            <p class="text-sm text-textColor"><span class="font-bold pr-1">Creator:</span> {{$comment['user']['firstname']}} {{ $comment['user']['lastname']}} | {{$comment['user']['email']}}</p>
            <p class="text-sm text-textColor"><span class="font-bold pr-1">Date:</span> {{$comment['written_at']}}</p>
        </div>
        <p class="text-lg text-textColor  break-words">{{$comment['content']}}</p>

        @can('delete', $comment  )
            <form action="/comments/{{$comment['id']}}" class="self-end" method="POST">
                @csrf
                @method("DELETE")
                <x-form-button
                    class="px-4 py-2 text-sm"

                >Delete</x-form-button>

            </form>
        @endcan
    </div>
</div>
