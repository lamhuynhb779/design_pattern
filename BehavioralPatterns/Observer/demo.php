<?php

require "TrafficLightSubject.php";
require "PersonObserver.php";

$trafficLight = new TrafficLightSubject();

$person1 = new PersonObserver();
$person2 = new PersonObserver();
$person3 = new PersonObserver();

$trafficLight->addObserver($person1);
$trafficLight->addObserver($person2);
$trafficLight->addObserver($person3);

$trafficLight->someBusinessLogic();
$trafficLight->someBusinessLogic();
