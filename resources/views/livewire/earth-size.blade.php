<div>
    <span class="text-lg">If the earth was this size....</span>
    <input wire:model="earth_diam" class="text-sm h-6 w-10" type=text name=earth_diam value='earth_diam' > mm
    <button wire:click="calculate">then..</button>
    <div class="container">
    <p>The moon would be {{$moon_diam}} mm in diameter  and the sun would be {{$sun_diam/100}} cm in diameter.</p>
    <p>But the moon would be {{$moon_dist}} km away and the sun would be {{$sun_dist}} km away.
    </div>
    <!-- <img src="{{$image}}"> -->
</div>
