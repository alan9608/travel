<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Tailwind UI -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">

    <!-- Alpine JS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @livewireStyles
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.2.3/dist/trix.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
</head>

<body class="flex flex-col bg-blue-100 -z-10 overflow-hidden bg-cover h-screen" ><!-- Simple background image set below other things -->

    {{ $slot }}

    @livewireScripts
    <script src="https://unpkg.com/moment"></script>  <!-- Required to format Pikaday output -->
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>  <!-- Select a date from a calendar -->
    <script src="https://unpkg.com/trix@1.2.3/dist/trix.js"></script> <!-- Fancy formatting on a testarea -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> <!-- Upload preview images to the app -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script> <!-- Upload images to the app -->
</body>

</html>