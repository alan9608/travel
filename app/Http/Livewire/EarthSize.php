<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class EarthSize extends Component
{
    public $earth_diam=1.0,     $earth_dist=1.0;
    public $sun_diam=109.24,    $sun_dist=1.0;
    public $moon_diam=0.2724,   $moon_dist=0.00257;
    public $mercury_diam=0.383, $mercury_dist=0.387;
    public $venus_diam=0.949,   $venus_dist=0.723;
    public $mars_diam=0.532,    $mars_dist=1.52;
    public $saturn_diam=9.45,   $saturn_dist=9.58;
    public $jupiter_diam=11.21, $jupiter_dist=5.20;
    public $neptune_diam=3.88,  $neptune_dist=30.05;
    public $uranus_diam=4.01,   $uranus_dist=19.20;
    public $pluto_diam=0.186,   $pluto_dist=39.48;

    public $au=1.49597871e11;
    public $ppi=93;
    public $image;

    public function render()
    {
        $this->image = Storage::disk('avatars')->url('kMF6MByve1ahwUF4XPRpHNdjh2Lo8ipA01V1Sdiv.png');
        return view('livewire.earth-size');
    }
    public function calculate()
    {
        $this->sun_diam = $this->sun_diam*$this->earth_diam;
        $this->moon_diam = $this->moon_diam*$this->earth_diam;
        $this->mercury_diam = $this->mercury_diam*$this->earth_diam;
        $this->venus_diam = $this->venus_diam*$this->earth_diam;
        $this->mars_diam = $this->mars_diam*$this->earth_diam;
        $this->saturn_diam = $this->saturn_diam*$this->earth_diam;
        $this->jupiter_diam = $this->jupiter_diam*$this->earth_diam;
        $this->neptune_diam = $this->neptune_diam*$this->earth_diam;
        $this->uranus_diam = $this->uranus_diam*$this->earth_diam;
        $this->pluto_diam = $this->pluto_diam*$this->earth_diam;

        $this->moon_dist *= $this->au;
        $this->sun_dist = $this->au;
        $this->mercury_dist = $this->au*$this->mercury_dist;
        $this->venus_dist = $this->au*$this->venus_dist;
        $this->mars_dist = $this->au*$this->mars_dist;
        $this->saturn_dist = $this->au*$this->saturn_dist;

        return "done";
    }
}
