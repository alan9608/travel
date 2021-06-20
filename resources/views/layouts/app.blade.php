<x-layouts.base>

    <x-nav.bar>
        <x-nav.group></x-nav.group>
    </x-nav.bar>

    <div class="h-screen overflow-auto">

        {{ $slot }}

    </div>

</x-layouts.base>