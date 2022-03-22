<?php
declare(strict_types=1);

spl_autoload_register(static function ($className) {
    if (strpos($className, 'Interface')) {
        require 'Interfaces/' . $className . '.php';
    } elseif (strpos($className, 'Trait')) {
        require 'Traits/' . $className . '.php';
    } else {
        require 'Class/' . $className . '.php';
    }
});

$koss = new Guerrier('Koss', 600);
var_dump($koss);
$destructeur = new CrabeDestructeur('Crabe', 500);
var_dump($destructeur);

$koss->attaqueCiblee($destructeur);
var_dump($destructeur);
$koss->botteFatale($destructeur);
var_dump($destructeur);
$destructeur->agonie($koss);
var_dump($koss);
$destructeur->brulure($koss);
var_dump($koss);
$koss->cri();
var_dump($destructeur);
$koss->attaqueLuniSolaire($destructeur);
var_dump($destructeur);

