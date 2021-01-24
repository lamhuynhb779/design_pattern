<?php

interface IAnimal {
	public function getName(): string;
}


abstract class AbstractAnimalFactory {
	public abstract function createAnimal(): IAnimal;
}

class FourLegsAnimalFactory extends AbstractAnimalFactory {
	public function createAnimal(): IAnimal {
		if (rand(0, 1)) {
			return new Cat();
		} else {
			return new Dog();
		}
	}
}

class TwoLegsAnimalFactory extends AbstractAnimalFactory {
	public function createAnimal(): IAnimal {
		if (rand(0, 1)) {
			return new Duck();
		} else {
			return new Chicken();
		}
	}
}

abstract class FourLegsAnimal implements IAnimal{
	
} 

abstract class TwoLegsAnimal implements IAnimal{
	
}

class Cat extends FourLegsAnimal {
	public function getName(): string {
		return "Cat";
	}
}

class Dog extends FourLegsAnimal {
	public function getName(): string {
		return "Dog";
	}
}

class Duck extends TwoLegsAnimal {
	public function getName(): string {
		return "Duck";
	}
}

class Chicken extends TwoLegsAnimal {
	public function getName(): string {
		return "Chicken";
	}
}

function callClient(AbstractAnimalFactory $factory) {
	echo $factory->createAnimal()->getName() . PHP_EOL;
}

$fourLegsAnimal = new FourLegsAnimalFactory();
callClient($fourLegsAnimal);

$twoLegsAnimal = new TwoLegsAnimalFactory();
callClient($twoLegsAnimal);
