<!doctype html>
<html>
    <head>
        @include('includes.head')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }} '}
        </script>
        {{-- This is the key part for your CSS (e.g., Tailwind CSS) --}}
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="text-3xl">
            <header class="row">
                @include('includes.header')
            </header>

            <div id="" class="">
                <!-- main content -->
                <div id="content">
                    @yield('content')
                </div>
            </div>
            <!-- footer content -->
            <footer class="row footer-row">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>