<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Home Page</title>
</head>
<body  class="bg-gray-900 text-gray-200 min-h-screen flex flex-col ">

  <x-header />

  <main dir="rtl" class="flex-grow flex items-center justify-center p-6">
    <div class="max-w-7xl w-full flex gap-6 flex-wrap">

        @foreach ($tasks as $task)



      <div class="bg-gray-800 rounded-lg shadow-lg p-6 flex-1 min-w-[280px] flex flex-col justify-between">
        <div>
          <h2 class="text-xl font-bold mb-2 text-yellow-400">
              @if($task)
              {{

                    $task->title;

              }}
              @else
              {{abort(404);}}
              @endif
            </h2>
          <p class="text-gray-300 mb-4">
            @if($task)
            {{

                  $task->body;

            }}
            @else
            {{abort(404);}}
            @endif
            </p>
          <p dir="ltr" class="text-gray-400 text-sm mb-4">
            @if($task)
            {{


                  \Morilog\Jalali\Jalalian::fromDateTime($task->created_at)->format('Y/m/d')

            }}
            @else
            {{abort(404);}}
            @endif            </p>
        </div>

          <form action='/tasks/{{$task->id}}' method="POST">
              @csrf
              @method('DELETE')
              <div class="flex items-center justify-between">
                  @if($task->is_done == 1)
                      <button class="bg-green-600 text-white px-3 py-1 rounded-md text-sm font-semibold cursor-default"
                              disabled>
                          انجام شده
                      </button>
                  @else
                      <button class="bg-red-600 text-white px-3 py-1 rounded-md text-sm font-semibold cursor-default"
                              disabled>
                          انجام نشده
                      </button>
                  @endif
                  <div class="space-x-2 rtl:space-x-reverse">

                      <a
                          href="{{route('tasks.edit',$task->id)}}"
                          class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded-md text-sm font-semibold">
                          ویرایش
                      </a>



                      <button form="delete-form"
                              class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md text-sm font-semibold">
                          حذف
                      </button>
                  </div>


              </div>
          </form>

    <form action="/tasks/{{$task->id}}" method="POST" name="delete-form">
        @csrf
        @method('DELETE')
    </form>

      </div>

      @endforeach


  </main>

  <x-footer />

</body>
</html>
