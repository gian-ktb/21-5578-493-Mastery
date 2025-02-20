<form action="{{ route('tasks.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Title:</label>
    <input type="text" name="title" value="{{ $task->title }}" required>
    <label>Description:</label>
    <textarea name="description">{{ $task->description }}</textarea>
    <label>Completed:</label>
    <input type="checkbox" name="is_completed" {{ $task->is_completed ? 'checked' : '' }}>
    <button type="submit">Update Task</button>
</form>