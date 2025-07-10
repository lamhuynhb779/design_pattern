<?php
// Basic Factory Method Pattern Example

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

class ProductFactory {
    // Factory method
    public static function createProduct($type): ?Product {
        switch ($type) {
            case 'car':
                return new Car();
            case 'bike':
                return new Bike();
            default:
                return null;
        }
    }
}

$product1 = ProductFactory::createProduct('car');
echo $product1->getName() . PHP_EOL; // Output: I am a Car

$product2 = ProductFactory::createProduct('bike');
echo $product2->getName() . PHP_EOL; // Output: I am a Bike

$product3 = ProductFactory::createProduct('truck');
if ($product3 === null) {
    echo "No such product type." . PHP_EOL; // Output: No such product type.
}