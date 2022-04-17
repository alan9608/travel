<div>
    <span class="text-lg">If the earth was this size....</span>
    <input wire:model="e_d" class="text-sm h-6 w-16" type="text" name="earth_diam" > mm
    <div class="container mt-3">
       <!-- Box:&nbsp;{{$e_d}} &nbsp;&nbsp; Ratio:&nbsp;{{ $this->ratio() }}<br /> -->
       <x-table>
           <x-slot name="head">
               <x-table.heading>Planet</x-table.heading>
               <x-table.heading>Diameter</x-table.heading>
               <x-table.heading>Distance (from Sun)</x-table.heading>
               <x-table.heading>Distance (from Earth)</x-table.heading>
           </x-slot>
           <x-slot name="body">
               <x-table.row>
                    <x-table.cell>Sun</x-table.cell>
                    <x-table.cell>{{$this->sun_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->sun_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->earth_dist()}}</x-table.cell>

                </x-table.row>
                <x-table.row>
                    <x-table.cell>Moon</x-table.cell>
                    <x-table.cell>{{$this->moon_diam()}}</x-table.cell>
                    <x-table.cell>-</x-table.cell>
                    <x-table.cell>{{$this->moon_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Mercury</x-table.cell>
                    <x-table.cell>{{$this->mercury_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->mercury_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->mercury_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Venus</x-table.cell>
                    <x-table.cell>{{$this->venus_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->venus_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->venus_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Earth</x-table.cell>
                    <x-table.cell>{{$this->earth_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->earth_dist()}}</x-table.cell>
                    <x-table.cell>{{ 0 }}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Mars</x-table.cell>
                    <x-table.cell>{{$this->mars_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->mars_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->mars_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Jupiter</x-table.cell>
                    <x-table.cell>{{$this->jupiter_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->jupiter_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->jupiter_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Saturn</x-table.cell>
                    <x-table.cell>{{$this->saturn_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->saturn_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->saturn_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Uranus</x-table.cell>
                    <x-table.cell>{{$this->uranus_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->uranus_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->uranus_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Neptune</x-table.cell>
                    <x-table.cell>{{$this->neptune_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->neptune_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->neptune_e_dist()}}</x-table.cell>
                </x-table.row>
                <x-table.row>
                    <x-table.cell>Pluto</x-table.cell>
                    <x-table.cell>{{$this->pluto_diam()}}</x-table.cell>
                    <x-table.cell>{{$this->pluto_dist()}}</x-table.cell>
                    <x-table.cell>{{$this->pluto_e_dist()}}</x-table.cell>
                </x-table.row>

           </x-slot>
       </x-table>

    </div>
    <!-- <img src="{{$image}}"> -->
</div>
