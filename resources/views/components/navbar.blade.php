<header class="container sm:mx-auto">

<div x-data="{open: false}" class="class="fixed inset-0 w-full h-12 z-40">
    <div class="flex items-center justify-between p-2 text-gray-800 bg-white lg:h-16 lg:mx-auto">
         <div  class=" ">
            <span class="sr-only">Open sidebar</span>
                <!-- Heroicon name: outline/menu-alt-2 -->
                <svg @click="open=true"  class="h-6 w-6 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-teal-500 " xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
            <ul x-show="open" @click.away="open = false">
                <li><button wire:click="trips">Trips</button></li>
                <li><button wire:click="places">Places</button></li>
            </ul>

        </div>
    <div>
        <a href="/dashboard"><img src="/img/Rossdale1.svg" class="h-10"></a>
    </div>
    <div class=" ">
        <button @click="miniOpen = !miniOpen" type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
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
    </div>
</div>
</header>
