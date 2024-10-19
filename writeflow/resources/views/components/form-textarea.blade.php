@props(['name' => 'default', 'placeholder'=>'default',  'require'=>true, 'textSize'=>'text-5xl', 'maxLength'=>false])
<div class="w-full gap-y-1 flex flex-col ">
     <textarea
         type="textarea"
         name="{{$name}}"
         {{ $attributes->merge(['class' => 'outline-none  w-full pl-2 placeholder-gray-400  resize-none  h-full
           flex items-center text-textColor  ' . $textSize] )  }}
         placeholder="{{$placeholder === 'default' ? ucfirst($name):$placeholder}}"
         id="{{$name}}"
         value="{{old($name)}}"
         @if($maxLength)
             maxlength="{{$maxLength}}"
         @endif
         @if($require)
             required
         @endif
     ></textarea>
    @error($name)
     <p class="text-sm text-red-500 pl-1 font-semibold bg-white ">{{ $message }}</p>
    @enderror
</div>

