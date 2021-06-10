<div class="lg:pl-0 sm:pl-4"><!-- either words if big enough or hamburger if small -->

    <div class="hidden sm:inline-block h-10 p-2 space-x-4 text-gray-200">
        <a href="/trips"><span class="text-lg font-semibold hover:text-white">Trips</span></a>
        <a href="/places"><span class="text-lg font-semibold hover:text-white">Places</span></a>
    </div>

    <div class="inline-block sm:hidden">
        <button @click="open=true" type="button"
            class="text-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 ">
            <span class="sr-only">Open sidebar</span>
            <!-- Heroicon name: outline/menu-alt-2 -->
            <svg class="h-8 pt-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>
    </div>

</div>
