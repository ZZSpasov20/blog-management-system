@props(['name' => 'default', 'placeholder'=>'default',  'require'=>true, 'textSize'=>'text-5xl', 'maxLength'=>false])
<div class="w-full gap-y-1 flex flex-col ">
     <textarea
         type="textarea"
         name="{{$name}}"
         {{ $attributes->merge(['class' => 'outline-none  w-full pl-2 placeholder-gray-400  resize-none  h-full
           flex items-center text-textColor  ' . $textSize] )  }}
         placeholder="{{$placeholder === 'default' ? ucfirst($name):$placeholder}}"
         id="{{$name}}"

         @if($maxLength)
             maxlength="{{$maxLength}}"
         @endif

     >{{ old($name) }}</textarea>

</div>

