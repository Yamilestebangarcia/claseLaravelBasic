<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield("titulo")</title>
        <meta name="autor" content="Yamil Esteban Garcia" />
        <meta http-equiv="Cache-control" content="max-age=2592000" />
    </head>
    <body>
        <!--   nav>ul>(il>a)*3 -->
        <nav>
            <ul></ul>
            <li><a href="{{ route("index") }}" >inicio</a></li>
            <li><a href="{{ route("nombre") }}">hola nombre</a></li>
            <li><a href="{{ route("hola") }}">hola</a></li>
        </nav>
        @yield("contenido")

        <!-- footer>ul>li*2 -->
        <footer>
            <ul>
                <li>pie1</li>
                <li>pie2</li>
            </ul>
        </footer>
    </body>
</html>
