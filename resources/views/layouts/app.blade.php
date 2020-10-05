<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- App Css --}}
    <link href="{{ mix('css/app.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @livewireStyles

</head>
<body>

{{ $slot }}

@livewireScripts
</body>
</html>
