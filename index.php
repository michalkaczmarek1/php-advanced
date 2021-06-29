<?php

include_once __DIR__ . '/vendor/autoload.php';

use Eduweb\Car;
use Eduweb\Speed;

//echo "hello";
$speed = new Speed(1.5);

//echo "\n" . $speed->getValue() . "\n";

$car = new Car('Ford', 'Mondeo', $speed);

//$car->sits = 4;
//echo 'Sits: ' . $car->sits . "\n";
//var_dump($car);

$car->test('a', 'b', 4);

echo 'color: ' . $car->getColor() . "\n";

echo 'Speed: ' . $car->getSpeed() . "\n";

//$car->make = 'Ford';
//$car->model = 'Mondeo';

//$car2 = $car;
//$car2->make = 'Fiat';
//$car2 = new Car();

//var_dump($car);
//var_dump($car2);

//$car->drive();
