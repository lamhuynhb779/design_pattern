<?php

include('CarBuilder.php');

// Normally creation
// $car = new Car(4, new SeatBelt("Airbus"), "red", new Windscreen("WS"), new Engine("Honda"));
// --> difficult to build, review

// Builder design pattern
$carBuilder = (new CarBuilder())
    ->addWheels(4)
    ->addSeatBelt(new SeatBelt("Airbus"))
    ->paint("red")
    ->addWindscreen(new Windscreen("WS"))
    ->addEngine(new Engine("Honda"));

$car = $carBuilder->build();
$car->run();
