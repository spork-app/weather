<?php

namespace Spork\Weather\Contracts\Services;

interface WeatherServiceContract
{
    public function query(string $address): array;
}
