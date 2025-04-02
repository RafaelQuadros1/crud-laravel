<x-layouts.app title="index">

    <div class="header d-flex justify-content-between align-items-center mb-3 p-4">
        <h1>Task List</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" 
            fill="none" 
            viewBox="0 0 24 24" 
            stroke-width="1.5" 
            stroke="currentColor" 
            class="size-6"
            style="width: 25px; height: 25px; color: #fff;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </a>
    </div>
    <div class="container ">
        @foreach ($tasks as $task )
        <div class="" >
            <div class="card-body border border-1 rounded-3 mb-3 p-4" style="background-color: #fff; border-radius: 10px;">
                <h2>{{ $task->task }}</h2>
                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->status }}</p>
                <div class="flex justify-content-between">
                    <a href="{{ route('tasks.edit', $task->id) }}" class=" w-1 h-1">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="w-6 h-6"
                            style="width: 25px; height: 25px; color: #000;">

                            <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
                        </svg>
                    </a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline; margin-left: 10px; background-color: transparent;">

                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="size-6"
                                style="width: 25px; height: 25px; color: #000;">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>

                        </button>
                    </form>
                </div>
            </div>

            @endforeach
        </div>
</x-layouts.app>