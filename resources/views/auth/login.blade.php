<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ورود</title>
</head>
<body dir="rtl" class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-6">

<div class="bg-gray-800 shadow-lg rounded-xl p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-yellow-400 text-center">ورود</h1>

    <form action="{{route('login')}}" method="POST" class="space-y-5">
        @csrf
        <x-form-field>
            <x-form-label for="email">ایمیل</x-form-label>
            <x-form-input name="email" type="email" required />
            <x-form-error name="email"/>
        </x-form-field>
        <x-form-field>
            <x-form-label for="password">رمز عبور</x-form-label>
            <x-form-input name="password" type="password" required />
            <x-form-error name="password"/>
        </x-form-field>

        <div class="flex justify-between">
            <div class="text-center">
                <x-form-button>ورود</x-form-button>
            </div>
            <div class="text-center mt-2">
                <x-form-back-button> بازگشت</x-form-back-button>
            </div>
        </div>


    </form>
</div>

</body>
</html>
