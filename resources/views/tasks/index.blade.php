<x-app-layout>
    <strong>Tasks List</strong>

    <form action="/task " method="POST">
        @csrf
        <input type="text" name="list" placeholder="Name of the task">
        <button type="submit">Submit Data</button>
    </form>
    <ol>
        @foreach ($tasks as $index=>$task)
            <li>{{ $task->list }} - <a style="color:red;" href="/task/{{ $task->id }}/edit">Edit</a></li>
        @endforeach
    </ol>
</x-app-layout>   