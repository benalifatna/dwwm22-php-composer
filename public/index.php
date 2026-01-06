<?php

use App\Classes\Chien;
use App\Classes\Chat;
// use App\Kernel;


// Chargement de l'autochargeur des classes de composer

require __DIR__ . "/../vendor/autoload.php";

$chien = new Chien;
echo $chien->seNourrir();

echo "<br>";

$chat = new Chat;
echo $chat->dormir();

// dd("Hello World");

// $Kernel = new Kernel;
// $Kernel->boot();
