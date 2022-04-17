<div x-data="{ open: false }" class="">
    <!-- /home/alan/travel/resources/views/components/nav/menu.blade.php -->
    <div class="hidden sm:block h-10 p-2 space-x-4 text-gray-600">
    <a href="/trips"><span class="text-lg font-semibold hover:text-white">Trips</span></a>
        <a href="/places"><span class="text-lg font-semibold hover:text-white">Places</span></a>
    </div>

<<<<<<< HEAD
    <div class="block sm:hidden">
        <button x-show="open" @click="open = !open" x-cloak  type="button"
            class="text-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 ">
=======
    <div class="inline-block sm:hidden">
        <button @click="open = !open" x-cloak  type="button"
            class="text-gray-600 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 ">
>>>>>>> 3e30e82e42b4bda1209e5770d926a8daec96e533
            <span class="sr-only">Open sidebar</span>
            <!-- Heroicon name: outline/menu-alt-2 -->
            <svg class="h-8 pt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>
        <div x-show="open"
            class="pt-6 absolute z-100 transform  translate-x-5"
            class="text-black bg-gray-100 origin-top-right right-0 w-36 border-2 box-border border-black rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu"
        >
            <ul
                @click.away="open = false"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-90"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-90"
                class="text-black bg-gray-100 origin-top-left left-0 w-36 border-2 box-border border-black rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu"
                aria-orientation="vertical"
                aria-labelledby="user-menu-button"
                tabindex="-1"
            >
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <li>
                    <a href="/trips" class="active:bg-gray-900 hover:bg-gray-500 hover:text-black active:text-gray-600 block px-4 py-2 text-sm text-gray-700">Trips</a>
                </li>
                <li>
                    <a href="/places" class="active:bg-gray-900 hover:bg-gray-300 hover:text-black active:text-gray-100 block px-4 py-2 text-sm text-gray-700">Places</a>
                </li>

            </ul>
        </div>
    </div>
</div>
