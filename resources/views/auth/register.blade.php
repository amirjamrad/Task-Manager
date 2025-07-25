<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ثبت نام</title>
</head>
<body dir="rtl" class="bg-gray-900 text-white min-h-screen flex items-center justify-center p-6">

<div class="bg-gray-800 shadow-lg rounded-xl p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-yellow-400 text-center">ثبت نام</h1>

    <form action="{{ route('register.store') }}" method="POST" class="space-y-5">
        @csrf

        <x-form-field>
            <x-form-label for="first_name">نام</x-form-label>
            <x-form-input name="first_name" required />
            <x-form-error name="first_name"/>
        </x-form-field>

        <x-form-field>
            <x-form-label for="last_name">نام خانوادگی</x-form-label>
            <x-form-input name="last_name" required />
            <x-form-error name="last_name"/>
        </x-form-field>

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
        <x-form-field>
            <x-form-label for="confirm_password">تکرار رمزعبور</x-form-label>
            <x-form-input name="confirm_password" type="password" required />
            <x-form-error name="confirm_password"/>
        </x-form-field>
        <div class="flex justify-between ">
            <div class="text-center">
                <x-form-button>ثبت نام</x-form-button>
            </div>
            <div class="text-center mt-2">
                <x-form-back-button> بازگشت</x-form-back-button>
            </div>
        </div>


    </form>
</div>

</body>
</html>
