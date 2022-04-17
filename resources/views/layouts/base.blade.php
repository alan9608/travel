<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Tailwind UI -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/alan.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">


    @livewireStyles
    <!-- @stack('styles') -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet"> -->
    <!-- <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"> -->
</head>

<body class="flex flex-col bg-blue-100 -z-10 overflow-hidden bg-cover h-screen" >

    {{ $slot }}

    @livewireScripts
    <!-- Alpine JS -->
    <script src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js" defer></script>
    <!-- <script src="https://unpkg.com/moment"></script> -->
    <!-- @stack('scripts') -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> -->
    <!-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script> -->
</body>

</html>
