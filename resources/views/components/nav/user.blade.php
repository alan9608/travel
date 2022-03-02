<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<div x-data="{ open: false }" >
    <div class="lg:pr-0 z-60 relative  pr-4 mt-1 mr-2 ">
        <button
            x-on:click="open = true"
            type="button"
            class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            id="user-menu-button"
            aria-expanded="false"
            aria-haspopup="true">
            <span class="sr-only">Open user menu</span>
            <img class="h-10 w-10 rounded-full"
                @if(Auth::check())
                    src="{{ auth()->user()->avatarUrl() }}"
                @else
                    src="/img/monkey.png"
                @endif
                alt="User Avatar">
        </button>
        <div x-show="open"  x-cloak class="pt-6 absolute z-100 transform  -translate-x-24" >
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
                <a href="/profile" class="active:bg-gray-900 hover:bg-gray-300 hover:text-black active:text-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="active:bg-gray-900 hover:bg-gray-300 hover:text-black active:text-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                @livewire('auth.logout')

            </ul>
        </div>
    </div>
</div>
