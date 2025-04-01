<x-layouts.app title="index">

    <div class="header d-flex justify-content-between align-items-center">
        <h1>Task List</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create New Task</a>
    </div>
    <div class="container">
        @foreach ($tasks as $task )
        <div class="task card mb-3">
            <div class="card-body bg-light">
                <h2>{{ $task->task }}</h2>
                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->status }}</p>
                <div class="actions">
                    <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>

            @endforeach
        </div>
</x-layouts.app>