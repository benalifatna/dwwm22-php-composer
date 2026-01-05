<?php

namespace App;


use App\Interfaces\VehiculeInterface;

class Voiture implements VehiculeInterface {
    public function __construct()
    {
        echo "New Car";
    }
}