@include('layouts.header')

<main class="d-flex flex-column min-vh-100 infinite-dots font-manrope">
    @include('layouts.navbar')
    <div class="position-relative flex-grow-1 d-flex align-items-center mx-auto py-4" style="width: 85%;">
        @yield('content')
    </div>
    @include('layouts.footer')
</main>
