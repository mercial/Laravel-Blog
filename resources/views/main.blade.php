<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        @include('partials._head')
    </head>

    <body>
        <!-- Меню-->
        @include('partials._nav')
        <!-- Header-->
        @yield('header')

        <!-- Основной контент-->
        <div class="container px-4 px-lg-5">
            @yield('content')
        </div>

        <!-- Footer-->
@include('partials._footer')
        <!-- Scripts-->
@include('partials._scripts')

    </body>
</html>


