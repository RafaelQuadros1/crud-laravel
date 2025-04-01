<div class="flex flex-column justify-content-center align-items-center">
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <h1>Criar Tarefa</h1>
        <label for="task">Task:</label>
        <input type="text" name="task" id="task" placeholder="Descrição da tarefa" required>

        <label for="description">Descrição:</label>
        <textarea name="description" id="description" placeholder="Detalhes da tarefa"></textarea>

        <button type="submit">Criar Tarefa</button>
    </form>
</div>