@props(['name'])
@error($name)
<p dir="ltr" class="text-sm text-red-500 mt-2 ">{{$message}}</p>
@enderror
