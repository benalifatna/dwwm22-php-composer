<?php
// Nommer aussi Contrats
namespace App\Interfaces;

interface AnimalInterface {

    public function manger(): string;
    public function seNourrir(): string;
    public function dormir(): string;
    
}