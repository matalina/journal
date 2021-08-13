<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Journal</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/8f19efb5ed.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            {{ $slot }}
        </div>
        <script>
            window.base_path = "{{ config('app.url') }}";
        </script>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
