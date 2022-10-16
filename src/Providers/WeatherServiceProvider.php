<?php

namespace Spork\Weather\Providers;

use Illuminate\Support\ServiceProvider;
use Spork\Core\Spork;
use Spork\Weather\Contracts\Services\WeatherServiceContract;
use Spork\Weather\Service\WeatherService;

class WeatherServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(WeatherServiceContract::class, WeatherService::class);
        Spork::addFeature('Weather', 'CloudIcon', '/weather', 'tool');
    }
}
