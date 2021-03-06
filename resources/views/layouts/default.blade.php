<!doctype html>
<html lang="en">
@include('includes.head')
<body>
    <div class="container">
        <header>
            @include('includes.menu')
        </header>
        <main role="main">
            @yield('content')
        </main>
        <footer>
            @include('includes.footer')
        </footer>
    </div>
    @include('includes.jsfooter')
</body>
</html>
