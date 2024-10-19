@props(['form'=>false, 'name'=>false] )
<input
    type="submit"
    value="{{$slot}}"
    @if($form)
        form="{{$form}}"
    @endif
    @if($name)
        name="{{$name}}"
    @endif
    {{$attributes->merge(['class'=>'px-10 py-2 text-white rounded-md cursor-pointer transition-all duration-700  bg-textColor hover:bg-backgroundElevatedColor '])}}>
