<!DOCTYPE html>
<html lang="ru">
        @include('layouts.head')
<body class="pink">
        @include('layouts.nav')

        <div class="container-fluid">
            <div class="row">

        @if (Auth::user())
                    <div class="col-md-3 fcking_bootstrap">
            @include('layouts.sidebar')
                    </div>
            @endif
                        <div class="col-md-9 content_app">
        @yield('content')
                </div>
            </div>
        </div>
    <!-- Scripts -->
    <script src="/public/js/app.js"></script>

    @yield('js');
        @if (Auth::User())
        <div class="change_color"></div>
        <script src="/public/js/color.js"></script>
            @endif
</body>
</html>
