<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        @include('_includes._head')
    </head>

    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>

        <script src="{{ asset(mix('assets/js/app.js')) }}"></script>
    </body>
    
</html>