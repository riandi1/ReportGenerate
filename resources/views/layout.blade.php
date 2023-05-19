<!DOCTYPE html>
<html lang="es">

<head>
    @include('includes.styles')
</head>

<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @include('includes.scripts')

</body>

</html>
