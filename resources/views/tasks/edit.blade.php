<x-layouts.app title="Edit Task">
    <div class="container d-flex flex-column justify-content-center align-items-center mt-5">

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="d-flex flex-column justify-content-center align-items-center w-100 max-w-600">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column justify-content-center align-items-center w-100 max-w-600 p-4 border rounded shadow-sm">
                <h1 class="mb-3">Edit Task</h1>

                <!-- Exibir erros -->
                @if ($errors->any())
                <div class="alert alert-danger w-100 mb-3">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Mensagem de sucesso -->
                @if (session('success'))
                <div class="alert alert-success w-100 mb-3">
                    {{ session('success') }}
                </div>
                @endif

                <!-- Mensagem de erro -->
                @if (session('error'))
                <div class="alert alert-danger w-100 mb-3">
                    {{ session('error') }}
                </div>
                @endif

                <!-- Campo Task -->
                <div class="mb-3 w-100">
                    <label for="task" class="form-label">Task</label>
                    <input type="text" name="task" id="task" value="{{ old('task', $task->task) }}" class="form-control" required>
                </div>

                <!-- Campo Description -->
                <div class="mb-3 w-100">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $task->description) }}</textarea>
                </div>

                <!-- Campo Status -->
                <div class="mb-3 w-100">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Pending</option>
                        <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Task</button>
            </div>
        </form>
    </div>

</x-layouts.app>