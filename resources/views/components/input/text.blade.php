@props([
    'leadingAddOn' => false,
])

<!-- <div class="flex rounded-md shadow-sm ">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 bg-gray-50 text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input {{ $attributes->merge(['class' => 'flex-1 p-2 form-input border border-gray-700 placeholder-opacity-50 block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5' . ($leadingAddOn ? ' rounded-none rounded-r-md' : '')]) }}/>
</div> -->

<div class='flex'>
    @if ($leadingAddOn)
        <span class="bg-gray-100 text-gray-500 py-1  px-2 rounded-l-md border border-gray-700">
            {{ $leadingAddOn }}
        </span>
    @endif

        <input {{ $attributes->merge(['class' => ' rounded-md border border-gray-700 py-1 px-2 w-full ' . ($leadingAddOn ? ' rounded-none rounded-r-md border-l-0' : '')]) }}/>
</div>