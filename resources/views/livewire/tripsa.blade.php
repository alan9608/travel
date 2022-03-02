<div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Trips</h1>
        <div class="py-4 space-y-4">

            <div class="flex justify-between">
            <div class="w-1/4">
                    <x-input.text wire:model="search" placeholder="Search Trips..." />
                </div>
                <div >
                    <x-button.primary wire:click="makenew"><x-icon.plus />New</x-button.primary>
                </div>
            </div>


            <div class="bg-gray-100 border-2 border-solid border-gray-300 rounded-lg">
                <div class="overflow-auto shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading class="w-full">Decription</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('start_date')" :direction="$sortField === 'start_date' ? $sortDirection : null">Date</x-table.heading>
                                <x-table.heading sortable wire:click="sortBy('days')" :direction="$sortField === 'days' ? $sortDirection : null" >Days</x-table.heading>
                                <x-table.heading>Type</x-table.heading>
                                <x-table.heading></x-table.heading>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($trips as $trip)
                                    <x-table.row>
                                        <x-table.cell>{{$trip->description}}</x-table.cell>
                                        <x-table.cell>{{$trip->date_for_humans}}</x-table.cell>
                                        <x-table.cell>{{$trip->days}}</x-table.cell>
                                        <x-table.cell>{{$trip->type_name}}</x-table.cell>
                                        <x-table.cell>
                                            <x-button.link wire:click="edit({{ $trip->id }})">
                                                <span class="text-xs bg-green-100 text-green-500 rounded px-2 border border-gray-400">
                                                    edit
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
            <form wire:submit.prevent="save">
                <x-modal.dialog wire:model="showEdit">

                    <x-slot name="title">Edit Trip</x-slot>

                    <x-slot name="content">

                        <x-input.group label="Description" for="description" :error="$errors->first('editing.description')" >
                            <x-input.text wire:model="editing.description" id="description" />
                        </x-input.group>

                        <x-input.group label="Date" for="date_for_editing" :error="$errors->first('editing.date_for_editing')">
                            <x-input.date wire:model="editing.date_for_editing" id="date_for_editing" />
                        </x-input.group>

                        <x-input.group label="Days" for="days" :error="$errors->first('editing.days')">
                            <x-input.text wire:model="editing.days" id="days"  />
                        </x-input.group>

                        <x-input.group label="Type" for="type_name" :error="$errors->first('editing.type_name')" >
                            <x-input.select wire:model="editing.type_id" id="type_name">
                                @foreach (App\Models\Trip::TYPES as $value => $type)
                                    <option value="{{$value}}">{{$type}}</option>
                                @endforeach
                            </x-input.select>
                        </x-input.group>

                        <x-input.group label="Details" for="type_detail"  :error="$errors->first('editing.type_detail')" >
                            <x-input.text wire.model="editing.type_detail" id="type_detail" class="placeholder-gray-500 placeholder-opacity-50" placeholder="Name of Ship/Resort/Train etc" />
                        </x-input.group>

                    </x-slot>

                    <x-slot name="footer">
                        <x-button.secondary wire:click="$set('showEdit',false)">Cancel</x-button.secondary>
                        <x-button.primary type="submit">Save</x-button.primary>
                    </x-slot>

                </x-modal.dialog>
            </form>

        </div>
    </div>
</div>