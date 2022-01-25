<x-app-layout title="Contact">
    <h2>Contact Page</h2>    
    <form action="contact" method="POST">
        @csrf

        <button type="submit">Submit</button>
    </form>
</x-app-layout>   