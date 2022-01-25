<x-app-layout>
    <strong>Create New Task</strong>
    <form action="/task " method="POST">
        @csrf
        <input type="text" name="list" placeholder="Name of the task">
        <button type="submit">Submit Data</button>
    </form>
</x-app-layout>   