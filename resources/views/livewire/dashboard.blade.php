<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Trips</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <!-- Replace with your content -->
        <div class="py-4">
            <div class="border-2 border-solid border-gray-300 rounded-lg h-96">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <x-table>
                            <x-slot name="head">
                                <x-table.heading sortable>Decription</x-table.heading>
                                <x-table.heading sortable>days</x-table.heading>
                            </x-slot>
                            <x-slot name="body">
                                @foreach ($trips as $trip)
                                     <x-table.row>
                                         <x-table.cell>{{$trip->description}}</x-table.cell>
                                         <x-table.cell>{{$trip->days}}</x-table.cell>
                                     </x-table.row>
                                @endforeach
                            </x-slot>
                        </x-table>
                    </div>
                </div>
            </div>
        </div>
    <!-- /End replace -->
    </div>
</div>
