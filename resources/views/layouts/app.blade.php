<x-layouts.base>
<!-- /home/alan/travel/resources/views/layouts/app.blade.php -->
    <x-nav.bar>
        <x-nav.group></x-nav.group>
    </x-nav.bar>

    <div class="h-screen overflow-auto ">

        {{ $slot }}

    </div>

</x-layouts.base>
