@if( Auth()->check() )
 <a wire:click="logout" class="active:bg-gray-900 active:text-gray-100 hover:bg-gray-300 hover:text-black block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Logout</a>
@endif