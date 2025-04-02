<x-layouts.app title="Create Task">
    <div class="d-flex flex-column justify-content-center align-items-center mt-5">
        <form action="{{ route('tasks.store') }}" method="POST" class="d-flex flex-column justify-content-center align-items-center w-100 max-w-600 p-5 border rounded-3 shadow-lg bg-light">
            @csrf

            <h2 class="mb-4 text-center">Create New Task</h2>

          
            <div class="mb-3 w-100">
                <label for="task" class="form-label text-muted">Task</label>
                <input type="text" class="form-control form-control-lg" id="task" name="task" required>
            </div>
            
            <div class="mb-3 w-100">
                <label for="description" class="form-label text-muted">Description</label>
                <textarea class="form-control form-control-lg" id="description" name="description" rows="4" required></textarea>
            </div>

            
            <button type="submit" class="btn btn-primary btn-lg mt-3">Create Task</button>
        </form>
    </div>

    <!-- Mensagem de sucesso -->
    @if (session('success'))
    <div class="alert alert-success w-100 mt-3">
        {{ session('success') }}
    </div>
    @endif

    <!-- Mensagem de erro -->
    @if (session('error'))
    <div class="alert alert-danger w-100 mt-3">
        {{ session('error') }}
    </div>
    @endif

    <!-- Exibir erros -->
    @if ($errors->any())
    <div class="alert alert-danger w-100 mt-3">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</x-layouts.app>
