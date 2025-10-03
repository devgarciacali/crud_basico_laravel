<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost/blog1/public/css/bootstrap.min.css">
    <title>
        @yield('titulo')
        Blog de Garcia
    </title>
</head>

<body>
    @include('layouts.nav')
    <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
                @yield('contenido')
            </div>
            @include('layouts.aside')
        </div>
    </main>
    <div class="b-example-divider"></div>
    @include('layouts.footer')
    <script src="http://localhost/blog1/public/js/bootstrap.min.js"></script>
</body>

</html>