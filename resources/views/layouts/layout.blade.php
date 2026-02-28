@include('layouts.header')
@include('layouts.navbar')

<body class="container-fluid min-vh-100 min-vw-100">
    @yield('content')
</body>

@include('layouts.footer')