<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class EarthSize extends Component
{
    public $au=1.49597871e11; // earth to sun in m
    public $e_d = 1; // from input box mm
    public $e_diam=1.2742e7;  // in m really
    public $ratio;

    public $sun_diam = 1.3927e9;        // 1.3927e9 m really
    public $sun_dist = 0;

    public $moon_diam=3.4748e6;     // diam 3.4748e6 m
    public $moon_dist=3.844e8;      // m from earth

    public $mercury_diam=4.8794e6;       // 4.8794e6 m
    public $mercury_dist=4.6759e10;

    public $venus_diam=1.2104e7;
    public $venus_dist=1.0863e11;

    public $earth_diam=1.2742e7;
    public $earth_dist=1.49597871e11;

    public $mars_diam=6.779e6;
    public $mars_dist=2.1309e11;

    public $saturn_diam=1.1646e8;
    public $saturn_dist=1.4785e12;

    public $jupiter_diam=1.3982e8;
    public $jupiter_dist=7.4443e11;

    public $neptune_diam=4.9244e7;
    public $neptune_dist=4.7477e12;

    public $uranus_diam=5.0724e7;
    public $uranus_dist=2.9476e12;

    public $pluto_diam=2.376e6;
    public $pluto_dist=5.9e12;

    public $image;

    public function ratio()
    {
        if($this->e_d) {
            return ($this->e_d) / $this->e_diam;
        } else {
            return 0.001 / $this->e_diam;
        }
    }

    public function moon_diam() // mm
    {
        return $this->units($this->ratio() * $this->moon_diam);
    }
    public function moon_dist() // mm
    {
        return $this->units($this->ratio() * $this->moon_dist);
    }
    public function sun_diam()
    {
        return $this->units($this->ratio() *  $this->sun_diam);
    }
    public function sun_dist()
    {
        return $this->units($this->ratio() * $this->sun_dist);
    }
    public function mercury_e_dist()
    {
        return $this->units($this->ratio() * abs($this->mercury_dist - $this->earth_dist));
    }
    public function mercury_dist()
    {
        return $this->units($this->ratio() * $this->mercury_dist);
    }
    public function mercury_diam()
    {
        return $this->units($this->ratio() * $this->mercury_diam);
    }
    public function venus_dist()
    {
        return $this->units($this->ratio() * $this->venus_dist);
    }
    public function venus_e_dist()
    {
        return $this->units($this->ratio() * abs($this->venus_dist - $this->earth_dist));
    }
    public function venus_diam()
    {
        return $this->units($this->ratio() * $this->venus_diam);
    }
    public function earth_dist()
    {
        return $this->units($this->ratio() * $this->earth_dist);
    }
    public function earth_diam()
    {
        return $this->units($this->ratio() * $this->earth_diam);
    }
    public function mars_dist()
    {
        return $this->units($this->ratio() * $this->mars_dist);
    }
    public function mars_e_dist()
    {
        return $this->units($this->ratio() * abs($this->mars_dist - $this->earth_dist));
    }
    public function mars_diam()
    {
        return $this->units($this->ratio() * $this->mars_diam);
    }
    public function jupiter_dist()
    {
        return $this->units($this->ratio() * $this->jupiter_dist);
    }
    public function jupiter_e_dist()
    {
        return $this->units($this->ratio() * abs($this->jupiter_dist - $this->earth_dist));
    }
    public function jupiter_diam()
    {
        return $this->units($this->ratio() * $this->jupiter_diam);
    }
    public function saturn_dist()
    {
        return $this->units($this->ratio() * $this->saturn_dist);
    }
    public function saturn_e_dist()
    {
        return $this->units($this->ratio() * abs($this->saturn_dist - $this->earth_dist));
    }
    public function saturn_diam()
    {
        return $this->units($this->ratio() * $this->saturn_diam);
    }
    public function uranus_dist()
    {
        return $this->units($this->ratio() * $this->uranus_dist);
    }
    public function uranus_e_dist()
    {
        return $this->units($this->ratio() * abs($this->uranus_dist - $this->earth_dist));
    }
    public function uranus_diam()
    {
        return $this->units($this->ratio() * $this->uranus_diam);
    }
    public function neptune_dist()
    {
        return $this->units($this->ratio() * $this->neptune_dist);
    }
    public function neptune_e_dist()
    {
        return $this->units($this->ratio() * abs($this->neptune_dist - $this->earth_dist));
    }
    public function neptune_diam()
    {
        return $this->units($this->ratio() * $this->neptune_diam);
    }
    public function pluto_dist()
    {
        return $this->units($this->ratio() * $this->pluto_dist);
    }
    public function pluto_e_dist()
    {
        return $this->units($this->ratio() * abs($this->pluto_dist - $this->earth_dist));
    }
    public function pluto_diam()
    {
        return $this->units($this->ratio() * $this->pluto_diam);
    }
    public function units($val)
    {
    //     return number_format($val,4) . " units";

        if ($val < 100) {
            return $this->form($val,1,5," mm");
        }
        if ($val < 1000) {
            return $this->form($val,10,4," cm");
        }
        if ($val < 1000000) {
            return $this->form($val,1000,3," m");
        }
        return $this->form($val,1000000,2," km");
    }
    public function form($val,$divisor,$digits,$units)
    {
        return number_format($val/$divisor,$digits)."$units";
    }
    public function render()
    {
        $this->image = Storage::disk('avatars')->url('kMF6MByve1ahwUF4XPRpHNdjh2Lo8ipA01V1Sdiv.png');
        return view('livewire.earth-size');
    }

}
