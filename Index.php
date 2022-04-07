<?php

require_once 'Bicycle.php';
require_once 'Car.php';

// Instanciation d'un nouvel objet 
$homerCar = new Car('pink', 4, 'Diesel');

var_dump($homerCar);

if (isset($homerCar->nbWheels)) {
  echo $homerCar->getNbWheels();
}

echo $homerCar->start();
echo $homerCar->forward();
var_dump($homerCar);
echo $homerCar->brake();
var_dump($homerCar);

// Instanciation d'un nouvel objet $ferrari
$ferrari = new Car('red', 4, 'Sans Plomb 95');

// Instanciation d'un nouvel objet $bike
$bike = new Bicycle('blue');
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
var_dump($bike);
$bike->dump();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');
$tornado->forward();