<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title ?? "Customs inspection" }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full bg-stone-100 dark:bg-gray-900">
        <div class="flex min-h-screen">
            <x-sidebar />

            <div class="flex-1 flex flex-col">
                <x-nav />

                <main class="flex-1">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>