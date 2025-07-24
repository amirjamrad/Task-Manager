
<a href="{{route('tasks.index')}}" {{$attributes->merge(['class'=>'bg-gray-300 hover:bg-red-600 text-black font-semibold  px-6 py-2 rounded-md shadow-md transition duration-200'])}}>
    {{$slot}}
</a>
