<div class="navbar">
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    @foreach ($navigations as $name=>$url)
        <li><a href="{{ $url }}">{{ $name }}</a></li>
    @endforeach
</div>