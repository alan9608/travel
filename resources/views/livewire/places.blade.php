<div class="py-2">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Places</h1>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="py-4">
            <div class="border-2 border-solid border-gray-300 rounded-lg h-96">
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex-col space-y-4">

            <x-table>
                <x-slot name="head">
                    <x-table.heading>Name</x-table.heading>
                    <x-table.heading>Country</x-table.heading>
                    <x-table.heading>Lat</x-table.heading>
                    <x-table.heading>Lng</x-table.heading>
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
                {{ $places->onEachSide(2)->links() }}
            </div>
        </div>


        </div>
</div>
</div>
</div>
</div>
</div>
