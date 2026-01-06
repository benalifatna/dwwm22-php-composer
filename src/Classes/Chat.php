<?php
namespace App\Classes;

use App\AbstractClasses\Animal;

class Chat extends Animal {

    public function manger(): string{
        return "Le chat mange";
    }
    public function seNourrir(): string {
         return "Le chat se nourrit";
    }
    public function dormir(): string {
         return "Le chat dort";
    }
}
