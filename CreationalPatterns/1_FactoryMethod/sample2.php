<?php

interface Product {
    public function getName(): string;
}

class Car implements Product {
    public function getName(): string {
        return "I am a Car";
    }
}

class Bike implements Product {
    public function getName(): string {
        return "I am a Bike";
    }
}

abstract class ProductFactory {
    abstract public function factoryMethod(): Product;

    public function execute(): void {
        $product = $this->factoryMethod();
        echo $product->getName() . PHP_EOL;
    }
}

class CarFactory extends ProductFactory {
    public function factoryMethod(): Product {
        return new Car();
    }
}

class BikeFactory extends ProductFactory {
    public function factoryMethod(): Product {
        return new Bike();
    }
}

$bike = new BikeFactory();
$bike->execute(); // Output: I am a Bike