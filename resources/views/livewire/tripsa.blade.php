<div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Trips</h1>
        <div class="py-4 h-full">
            <div class="bg-gray-100 border-2 border-solid border-gray-300 rounded-lg">
                <div class="overflow-auto shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading>Decription</x-table.heading>
                                <x-table.heading sortable>Date</x-table.heading>
                                <x-table.heading sortable>Days</x-table.heading>
                                <x-table.heading>Type</x-table.heading>
                                <x-table.heading></x-table.heading>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($trips as $trip)
                                <x-table.row>
                                    <x-table.cell>{{$trip->description}}</x-table.cell>
                                    <x-table.cell>{{$trip->date_for_humans}}</x-table.cell>
                                    <x-table.cell>{{$trip->days}}</x-table.cell>
                                    <x-table.cell>{{$trip->type}}</x-table.cell>
                                    <x-table.cell>
                                        <x-button.link wire:click="edit({{ $trip->id }})">
                                            <span class="flex">
                                                <x-icon.solid.pencil />
                                            </span>
                                        </x-button.link>
                                    </x-table.cell>
                                </x-table.row>
                                @endforeach
                            </x-slot>
                        </x-table>
                        <div>
                            {{ $trips->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="save">
        <!-- <x-modal.dialog  wire:model="showEditModal"> -->
            <!-- <x-slot name='title'>Title</x-slot>
            <x-slot name='content'></x-slot>
            <x-slot name='footer'>
                <x-button.secondary>Cancel</x-button.secondary>
                <x-button.primary>Save</x-button.primary>
            </x-slot> -->
        <!-- </x-modal.dialog> -->
    </form>
</div>