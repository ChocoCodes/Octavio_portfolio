@include('layouts.header')

<main class="d-flex flex-column min-vh-100 infinite-dots">
    @include('layouts.navbar')
    <div class="flex-grow-1 d-flex align-items-center">
        @yield('content')
    </div>
    @include('layouts.footer')
</main>
