<x-layouts.base>
<style>
[x-cloak] { display: none }
</style>
    <div style="background-position-x:center;" class="bg-sea flex-col z-0 overflow-hidden">

    <div x-cloak  x-data="{open: false}" style="background-color:#393939;color:white;" class="flex items-center justify-between h-12 z-10 ">


        <div class="alan ">

            <div class="hidden sm:block pl-4 space-x-4 text-gray-300">
                <a href="/trips"><span class="text-sm font-semibold">Trips</span></a>
                <a href="/places"><span class="text-sm font-semibold">Places</span></a>
            </div>

            <div class="">
                <div x-show="open">
                    <button @click="open=true" type="button" class="text-gray-200 px-4  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 ">
                        <span class="sr-only">Open sidebar</span>
                        <!-- Heroicon name: outline/menu-alt-2 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                        <ul x-show="open" @click.away="open = false">
                            <li><button wire:click="trips">Trips</button></li>
                            <li><button wire:click="places">Places</button></li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>

        <div class="alan ">
            <a href="/dashboard"><img src="/img/Rossdale1.svg" class="h-8 md:h-10"></a>
        </div>

        <div x-cloak class="alan pr-4">
            <div x-data="{ miniOpen: false }" @keydown.window.escape="miniOpen = false" class="ml-3 relative">

                <div>
                    <button @click="miniOpen = !miniOpen" type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full"
                            @if(Auth::check())
                                src="{{ auth()->user()->avatarUrl() }}"
                            @else
                                src="/img/monkey.png"
                            @endif
                            alt="User Avatar">
                    </button>
                </div>

                <div  x-show="miniOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90" style="background-color:#ddd;" class="text-black origin-top-right absolute right-0 mt-4 w-48 border-2 box-border border-black rounded-md shadow-lg py-1 ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="/profile" class="active:bg-gray-900 active:text-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="active:bg-gray-900 active:text-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    @livewire('auth.logout')
                </div>
            </div>
        </div>
    </div>

    <div>
    <main class="bg-cover -mb-12 md:-mb-12 flex h-screen w-full">

        {{ $slot ?? 'default' }}

    </main>
</div>

    </div>

</x-layouts.base>