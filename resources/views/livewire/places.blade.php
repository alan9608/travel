<div class="py-2 max-x-4xl mx-auto ">
    <div class="md:max-w-4xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Places</h1>

    <div class="max-x-4xl mx-auto px-2 sm:px-4 md:px-6">
        <div class="py-4">
            <div class="bg-gray-100 border-2 border-solid shadow border-gray-300 rounded-lg z-20 ">
                <div class="overflow-auto shadow rounded-lg">
                    <div class=" px-4 py-5 sm:p-6">
                        <x-table  class="w-full ">
                            <x-slot name="head">
                                <x-table.heading sortable>Name</x-table.heading>
                                <x-table.heading sortable>Country</x-table.heading>
                                <x-table.heading sortable>Lat</x-table.heading>
                                <x-table.heading sortable>Lng</x-table.heading>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($places as $place)
                                    <x-table.row>
                                        <x-table.cell>{{$place->name}}</x-table.cell>
                                        <x-table.cell>{{$place->country}}</x-table.cell>
                                        <x-table.cell>{{$place->latitude}}</x-table.cell>
                                        <x-table.cell>{{$place->longitude}}</x-table.cell>
                                    </x-table.row>
                                @endforeach
                            </x-slot>
                        </x-table>
                        <div>
                            {{ $places->links() }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
</div>
