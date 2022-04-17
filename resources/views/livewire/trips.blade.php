<div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Trips has [{{ $showEdit }}]</h1>
    </div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
<!-- Replace with your content -->
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
                                @forelse ($trips as $key => $trip)
                                <x-table.row>
                                    <x-table.cell>{{$trip->description}}</x-table.cell>
                                    <x-table.cell>{{$trip->date_for_humans}}</x-table.cell>
                                    <x-table.cell>{{$trip->days}}</x-table.cell>
                                    <x-table.cell>{{$trip->type}}</x-table.cell>
                                    <x-table.cell>
                                        <x-button.link wire:click="edit({{ $trip->id }})">
                                            <span class="flex">
                                                <x-icon.solid.pencil />Edit
                                            </span>
                                        </x-button.link>
                                    </x-table.cell>
                                </x-table.row>
                                @empty
                                <x-table.row>
                                    <x-table.cell colspan="5">
                                        <div class="flex justify-center items-center space-x-2">
                                            <x-icon.inbox class="h-8 w-8 text-cool-gray-400" />
                                            <span class="font-medium py-8 text-cool-gray-400 text-xl">No Trips found...</span>
                                        </div>
                                    </x-table.cell>
                                </x-table.row>
                                @endforelse
                            </x-slot>
                        </x-table>
                        <div>
                            {{ $trips->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- /End replace -->
    </div>
    <x-modal.dialog>

        <x-slot name="title">Edit Trip</x-slot>

        <x-slot name="content">

            <form wire:submit.prevent="save">

                <x-input.group for="description" label="Description" :error="$errors->first('editing.description')">
                    <x-input.text wire:model="editing.description" id="editing.description" />
                </x-input.group>

                <x-input.group for="start_date" label="Start Date" :error="$errors->first('editing.start_date')">
                    <x-input.date wire:model="editing.start_date" id="start_date" />
                </x-input.group>

                <x-input.group for="days" label="Days" :error="$errors->first('editing.days')">
                    <x-input.date wire:model="editing.days" id="days" />
                </x-input.group>

                <x-input.group for="status" label="Status" :error="$errors->first('editing.status')">
                    <x-input.select wire:model="editing.type" id="type">
                        @foreach (App\Models\Trip::TYPES as $value => $label)
                        <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </x-input.select>
                </x-input.group>
                <x-button.primary type="submit">Save></x-button.primary>
            </form>
        </x-slot>

        <x-slot name="footer">
            <x-button.secondary wire:click="$set('showEdit', false)">Cancel</x-button.secondary>
        </x-slot>
    </x-modal.dialog>
</div>
