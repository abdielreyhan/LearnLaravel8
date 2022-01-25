<x-app-layout>
    <strong>Tasks List</strong>

    <form action="/task " method="POST">
        @csrf
        <input type="text" name="list" placeholder="Name of the task">
        <button type="submit">Submit Data</button>
    </form>
    <ol>
        @foreach ($tasks as $index=>$task)
            <li>{{ $task->list }} - <a style="color:rgb(0, 38, 255);" href="/task/{{ $task->id }}/edit">Edit</a>-
                <form action="/task/{{ $task->id }}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button style="color: red" type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ol>
</x-app-layout>