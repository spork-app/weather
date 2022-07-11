<?php

namespace Spork\Weather\Providers;

use App\Spork;
use Spork\Weather\Contracts\Services\WeatherServiceContract;
use Spork\Weather\Service\WeatherService;
use Illuminate\Support\ServiceProvider;

class WeatherServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(WeatherServiceContract::class, WeatherService::class);
        Spork::addFeature('Weather', 'CloudIcon', '/weather', 'tool'); 
    }
}
