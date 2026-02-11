<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-top />

<body>
    <header>
        <h1>LiveWire</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>Footer</footer>
    @livewireScripts
</body>

</html>
