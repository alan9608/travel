<div>
<div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Places</h1>
        <div class="py-4 space-y-4">

            <div class="flex justify-between">
            <div class="w-1/4">
                    <x-input.text wire:model="search" placeholder="Search Places..." />
                </div>
                <div>
                    <x-button.primary wire:click="create"><x-icon.plus />New</x-button.primary>
                </div>
            </div>

            <div class="bg-gray-100 border-2 border-solid border-gray-300 rounded-lg">
                <div class="overflow-auto shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading sortable wire:click="sortBy('name')" :direction="$sortField === 'name' ? $sortDirection : null" class="w-1/2">Name</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('country')" :direction="$sortField === 'country' ? $sortDirection : null" class="w-1/2">Country</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('latitude')" :direction="$sortField === 'latitude' ? $sortDirection : null">Latitude</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('longitude')" :direction="$sortField === 'longitude' ? $sortDirection : null">Longitude</x-table.heading>
                                <x-table.heading></x-table.heading>
                            </x-slot>
                            <x-slot name="body">
                                @forelse ($places as $place)
                                    <x-table.row wire:loading.class.delay="opacity-75">
                                        <x-table.cell>{{$place->name}}</x-table.cell>
                                        <x-table.cell>{{$place->country}}</x-table.cell>
                                        <x-table.cell>{{$place->latitude}}</x-table.cell>
                                        <x-table.cell>{{$place->longitude}}</x-table.cell>
                                        <x-table.cell>
                                            <x-button.link wire:click="edit({{ $place->id }})">
                                                <span class="text-xs bg-green-100 text-green-500 rounded px-2 border border-gray-400">
                                                    edit
                                                </span>
                                            </x-button.link>
                                        </x-table.cell>
                                    </x-table.row>
                                @empty
                                    <x-table.row>
                                        <x-table.cell colspan="4">
                                            <div class="flex justify-center items-center">
                                                <x-icon.thumb-down class="h-8 w-8 text-cool-gray-400 space-x-2" />
                                                <span class="font-medium py-8 text-cool-gray-400 text-xl">Empty result for {{$search}}</span>
                                            </div>
                                        </x-table.cell>
                                    </x-table.row>
                                @endforelse

                            </x-slot>
                        </x-table>

                        <div>
                            {{ $places->links() }}
                        </div>

                    </div>
                </div>
            </div>

            <x-modal.dialog wire:model="showPlaceEditor">

                <x-slot name="title">Edit Place</x-slot>

                <x-slot name="content">

                    <form wire:submit.prevent="save">
                        <x-input.group label="Name" for="name" :error="$errors->first('editing.name')">
                            <x-input.text wire:model="editing.name" id="name" />
                        </x-input.group>
                        <x-input.group label="Country" for="country" :error="$errors->first('editing.country')">
                            <x-input.text wire:model="editing.country" id="country" />
                        </x-input.group>
                        <x-input.group label="Latitude" for="latitude" :error="$errors->first('editing.latitude')">
                            <x-input.text wire:model="editing.latitude" id="latitude" />
                        </x-input.group>
                        <x-input.group label="Longitude" for="longitude" :error="$errors->first('editing.longitude')">
                            <x-input.text wire:model="editing.longitude" id="longitude" />
                        </x-input.group>
                    </form>

                </x-slot>

                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showPlaceEditor',false)">Cancel</x-button.secondary>
                    <x-button.primary wire:click="save">Save</x-button.primary>
                </x-slot>

            </x-modal.dialog>

        </div>
    </div>
</div>
</div>