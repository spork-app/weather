<?php

namespace Spork\Weather\Models;

use Illuminate\Contracts\Support\Arrayable;

class Forecast implements Arrayable
{
    public string $address;

    public string $updated_at;

    public ?string $condition;

    public ?string $condition_image;

    public float $temperature;

    public float $feels_like;

    // Percent
    public int $humidity;

    public float $pressure;

    public float $wind_speed;

    // percent
    public int $cloud_cover;

    public int $chance_of_rain;

    public int $change_of_snow;

    public function toArray()
    {
        return (array) $this;
    }
}
