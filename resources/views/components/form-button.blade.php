<button {{$attributes->merge(['class'=>'bg-yellow-500 hover:bg-yellow-600 text-black font-semibold px-6 py-2 rounded-md shadow-md transition duration-200','type'=>'submit'])}}>
    {{$slot}}
</button>
