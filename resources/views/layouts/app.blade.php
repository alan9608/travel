<x-layouts.base>

    <x-navbar>
        <x-navgroup></x-navgroup>
    </x-navbar>

    <div class="h-screen overflow-auto">

        {{ $slot ?? 'X' }}

    </div>

</x-layouts.base>