<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title ?? "Customs inspection" }}</title>
        @vite('resources/css/app.css')
    </head>
    <body class="h-full">
        {{ $slot }}
    </body>
</html>