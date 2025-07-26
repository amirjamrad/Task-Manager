
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Document</title>
</head>
<body >

  <header class="bg-gray-900 text-gray-200 shadow-xl px-6 py-4 flex justify-between items-center border-b-2 border-yellow-400 rounded-xl flex justify-between">

        <div class="text-center mr-5">
            <nav>
                <ul class="flex space-x-8 text-lg font-medium">
                    @guest
                    <li><a href="{{route('register')}}" class="hover:text-yellow-400 transition-colors duration-300">ثبت نام</a></li>
                    <li><a href="{{route('login')}}" class="hover:text-yellow-400 transition-colors duration-300">ورود</a></li>
                    @endguest
                    @auth
                            <form action="/logout" method="POST">
                                @csrf
                                <x-form-button>خروج</x-form-button>
                            </form>
                        @endauth

                </ul>
            </nav>
        </div>

        <div class="text-center">
            <nav>
                <ul class="flex space-x-8 text-lg font-medium">
                    <li><a href="{{route('tasks.create')}}" class="hover:text-yellow-400 transition-colors duration-300">ایجاد تسک </a></li>
                    <li><p class="text-yellow-400 transition-colors  font-bold duration-300">  Task Manager</p></li>

                </ul>
            </nav>
        </div>



  </header>

</body>
</html>


