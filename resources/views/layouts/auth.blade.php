<x-layouts.base>
    <div id="mysea" class="bg-gray-400 text-gray-800 min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8 ">
        <div class="sm:mx-auto sm:w-full sm:max-w-lg">
            <img class="mx-auto h-16 w-auto" src="/img/Rossdale1.svg" alt="Rossdale Travel Logo" />
        </div>

        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-md shadow-lg ">
                {{ $slot }}
        </div>
    </div>
</x-layouts.base>