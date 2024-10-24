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

        return view('livewire.weather', [
            'info' => $info, // Передаем в шаблон
        ]);
    }

    public function getCurrentTempByCity(string $city)
    {
        if (! is_numeric($city)) {
            $params['q'] = $city;
        } else {
            $params['id'] = $city;
        }

        return $this->getCurrent($params)->main;
    }

}