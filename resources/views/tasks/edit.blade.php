<x-layouts.app title="edit">
    <div>
        <form action="{{ route('tasks.edit') }}" method="put">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ $task->title }}">
            </div>
            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description">{{ $task->description }}</textarea>
            </div>
            <div>
                <label for="due_date">Due Date</label>
                <input type="date" name="due_date" id="due_date" value="{{ $task->due_date }}">
            </div>
            <div>
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>
            <button type="submit">Update Task</button>
        </form>
    </div>
</x-layouts.app>