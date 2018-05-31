<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        @include('_includes._head')
    </head>

    <body>
        <div id="app">
            @include('_includes._header')

            <main>
                @yield('content')
            </main>

            @include('_includes._footer')
        </div>

        <script src="{{ asset(mix('assets/js/app.js')) }}"></script>
    </body>
    
</html>