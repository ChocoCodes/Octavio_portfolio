<nav>
    <div class="d-flex gap-2">
        @foreach($links as link)
            <x-nav-item name="$link->name" url="$link->url" />
        @endforeach
    </div>
</nav>