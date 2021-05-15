@if( Auth()->check() )
 <a wire:click="logout" class="active:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Logout</a>
@endif