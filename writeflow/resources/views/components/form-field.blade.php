@props(['name' => 'default', 'type' => 'text', 'require'=>true])

@php
    if($type === 'password'){
        $password = true;
    }else
    {
        $password = false;
    }

@endphp

<div class="w-72 gap-y-1 flex flex-col relative  "
     x-data="{ showPassword: false}">
    <input
        :type="showPassword ? 'text' : '{{ $type }}'"
        name="{{$name}}"
        {{ $attributes->merge(['class' => 'text-gray-500 border-solid border-2 border-gray-300 focus:border-textColor outline-none focus:text-backgroundElevatedColor transition-all duration-500 w-full py-1 pl-2 rounded-md']) }}
        placeholder="{{ucfirst($name)}}"
        id="{{$name}}"
        value="{{old($name)}}"
        @if($require)
            required
        @endif
    >

    @if($password)
        <button
            type="button"
            @click.prevent="showPassword = !showPassword"
            class="absolute right-6 top-2  text-xs">
            <span x-text="showPassword ? 'Hide' : 'Show'"></span>
        </button>
    @endif

    @error($name)
        <p class="text-sm text-red-500 pl-1 font-semibold">{{ $message }}</p>
    @enderror
</div>
