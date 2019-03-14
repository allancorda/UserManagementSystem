<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.header')
        <div class="d-flex" id="wrapper">
            @include('includes.sidenav')
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </body>
</html>
