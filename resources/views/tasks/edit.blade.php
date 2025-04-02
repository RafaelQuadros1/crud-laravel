<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="task">Task</label>
        <input type="text" name="task" id="task" value="{{ old('task', $task->task) }}">
    </div>

    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description">{{ old('description', $task->description) }}</textarea>
    </div>

    <div>
        <label for="status">Status</label>
        <select name="status" id="status">
            <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Pending</option>
            <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Completed</option>
        </select>
    </div>

    <button type="submit">Update Task</button>
</form>
