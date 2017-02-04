<!DOCTYPE html>
<html lang="en">
        @include('layouts.head')
<body>
        @include('layouts.nav')

        @yield('content')


    <!-- Scripts -->
    <script src="/public/js/app.js"></script>
    @yield('js');
</body>
</html>
