<x-app-layout>
    <strong>Edit Task</strong>
    <form action="/task/{{ $task->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="list" placeholder="Name of the task" value="{{ $task->list }}">
        <button type="submit">Update Data</button>
    </form>
</x-app-layout>   