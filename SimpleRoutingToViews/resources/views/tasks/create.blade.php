<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label>Title:</label>
    <input type="text" name="title" required>
    <label>Description:</label>
    <textarea name="description"></textarea>
    <button type="submit">Create Task</button>
</form>
