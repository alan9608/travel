<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- Tailwind UI -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tailwindcss/ui@latest/dist/tailwind-ui.min.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">


    @livewireStyles
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
</head>

<body id="mysea" class="flex flex-col bg-blue-100 -z-10 overflow-hidden bg-cover h-screen" ><!-- Simple background image set below other things -->

    {{ $slot }}

    @livewireScripts
    <!-- Alpine JS -->
    <script src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js" defer></script>
    <!-- Picaday plus required moments (for formatting) -->
    <script src="https://unpkg.com/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <!-- Filepond for file uploads -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> <!-- Upload preview images to the app -->
   <script src="https://unpkg.com/filepond/dist/filepond.js"></script> <!-- Upload images to the app -->
</body>

</html>