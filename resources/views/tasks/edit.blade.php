<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ویرایش تسک</title>
</head>
<body dir="rtl" class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-6">

    <div class="bg-gray-800 shadow-lg rounded-xl p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-yellow-400 text-center">ویرایش تسک</h1>

        <form action="{{ route('tasks.update',$task->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PATCH')

            <x-form-field>
                <x-form-label for="title">عنوان</x-form-label>
                <x-form-input name="title" value="{{$task->title}}"/>
                <x-form-error name="title"/>
            </x-form-field>

            <div>
                <label class="block mb-1 text-gray-300">توضیحات</label>
                <textarea name="body" rows="4"
                          class="w-full px-4 py-2 bg-gray-700 text-white rounded border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500">{{ $task->body }}</textarea>
                @error('body')
                    <p dir="ltr" class="text-sm text-red-500 mt-2 ">{{$message}}</p>
                 @enderror
            </div>

            <div class="bg-gray-800 border border-gray-700 rounded-xl p-4 flex items-center justify-between w-full max-w-md">
                <span class="text-gray-300 text-base font-medium">انجام شده </span>

                <label class="relative inline-flex items-center cursor-pointer">
                    <input type="checkbox" name="is_done" id="is_done" value="1" class="sr-only peer" {{ $task->is_done ? 'checked' : '' }}>
                    <div class="w-11 h-6 bg-gray-600 rounded-full peer peer-checked:bg-yellow-500 transition-all duration-300"></div>
                    <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition-all duration-300 peer-checked:translate-x-5"></div>
                </label>
            </div>



            <div class="flex justify-between">

                <div class="text-center">
                    <x-form-button>ذخیره تغییرات</x-form-button>
                </div>

                <div class="text-center mt-2">
                    <x-form-back-button>بازگشت</x-form-back-button>
                </div>

            </div>
        </form>
    </div>

</body>
</html>
