<?php

namespace App\Livewire;

use Livewire\Component;
use RakibDevs\Weather\Weather as WeatherWeather;

class Weather extends Component
{
    public function render()
    {
        $wt = new WeatherWeather();
        $info = $wt->getCurrentByCord(47.222109, 39.718813);
        dd($info);

        return view('livewire.weather');
    }
}
