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
<<<<<<< HEAD
    <!-- @stack('styles') -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet"> -->
    <!-- <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"> -->
</head>

<body class="flex flex-col bg-blue-100 -z-10 overflow-hidden bg-cover h-screen" >
=======
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
</head>

<body id="mysea" class="flex flex-col bg-blue-100 -z-10 overflow-hidden bg-cover h-screen" ><!-- Simple background image set below other things -->
>>>>>>> 3e30e82e42b4bda1209e5770d926a8daec96e533

    {{ $slot }}

    @livewireScripts
    <!-- Alpine JS -->
    <script src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js" defer></script>
<<<<<<< HEAD
    <!-- <script src="https://unpkg.com/moment"></script> -->
    <!-- @stack('scripts') -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> -->
    <!-- <script src="https://unpkg.com/filepond/dist/filepond.js"></script> -->
=======
    <!-- Picaday plus required moments (for formatting) -->
    <script src="https://unpkg.com/moment"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <!-- Filepond for file uploads -->
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script> <!-- Upload preview images to the app -->
   <script src="https://unpkg.com/filepond/dist/filepond.js"></script> <!-- Upload images to the app -->
>>>>>>> 3e30e82e42b4bda1209e5770d926a8daec96e533
</body>

</html>
