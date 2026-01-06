<?php
namespace App\Classes;

use App\AbstractClasses\Animal;

class Chien extends Animal {

    public function manger(): string{
        return "Le chien mange";
    }
    public function seNourrir(): string {
         return "Le chien se nourrit";
    }
    public function dormir(): string {
         return "Le chien dort";
    }
}
