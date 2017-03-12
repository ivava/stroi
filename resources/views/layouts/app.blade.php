<!DOCTYPE html>
<html lang="en">
        @include('layouts.head')
<body>
        @include('layouts.nav')

        <div class="container-fluid">
            <div class="row">

        @if (Auth::user())
                    <div class="col-md-3">
            @include('layouts.sidebar')
                    </div>
            @endif
                        <div class="col-md-9">
        @yield('content')
                </div>
            </div>
        </div>
    <!-- Scripts -->
    <script src="/public/js/app.js"></script>
    @yield('js');
</body>
</html>
