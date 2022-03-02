<div>
    <span class="text-lg">If the earth was this size....</span>
    <input wire:model="earth_diam" class="text-sm h-6 w-12" type=text name=earth_diam value='earth_diam' > mm
    <x-button.primary @click="calculat()" class="py-1 px-2 text-sm uppercase">then</x-button.primary>
    <div class="container">
    <p>The moon would be {{$this->moon_diam()}} in diameter  and the sun would be {{$this->sun_diam()}} in diameter.</p>
    <p>But the moon would be {{$this->moon_dist}} km away and the sun would be {{$this->sun_dist}} km away.
    </div>
    <!-- <img src="{{$image}}"> -->
</div>
