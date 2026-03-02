<header class="w-100 container py-3 d-flex justify-content-between align-items-center px-4">
    <a href="{{ url('/') }}">
        <img src="{{ asset('assets/images/logo-32x32.png') }}" alt="Logo" style="width: 40px; height: 40px;">
    </a>
    <nav class="d-flex gap-4 align-items-center">
        @foreach(config('navigation.links') as $link)
            @php $link = (object) $link; @endphp {{-- Typecast to object for key-value access --}}
            @if($link->name != "Home") 
                <x-nav-item :name="$link->name" :url="$link->url" />
            @endif
        @endforeach
    </nav>
</header>