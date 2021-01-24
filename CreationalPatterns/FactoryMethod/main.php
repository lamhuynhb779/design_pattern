<?php

interface IAnimal {
	public function getName(): string;
}

class Dog implements IAnimal {
	public function getName(): string {
		return "I am Dog";
	}
}

class Cat implements IAnimal {
	public function getName(): string {
		return "I am Cat";
	}
}

class Duck implements IAnimal {
	public function getName(): string {
		return "I am Duck";
	}
}

// Factory method

interface IAnimalFactory {
	public function createAnimal(): IAnimal;
}

class BasicAnimalFactory implements IAnimalFactory {
	private $index = 1;

	public function createAnimal(): IAnimal {
		if ($this->index == 1) {
			$this->index++;
			return new Dog();
		}
		if ($this->index == 2) {
			$this->index++;
			return new Cat();
		}
		if ($this->index == 3) {
			$this->index = 1;
			return new Duck();
		}
		return null;
	}
}

class RandomAnimalFactory implements IAnimalFactory {
	public function createAnimal(): IAnimal {
		$animalType = rand(1,3);
		if ($animalType == 1) {
			return new Dog();
		} elseif ($animalType == 2) {
			return new Cat();
		} else {
			return new Duck();
		}
	}
}

function myfunc() {	
	$factoryType = rand(0, 1);
	
	if ($factoryType == 0) {
		$factory = new BasicAnimalFactory();
	} else {
		$factory = new RandomAnimalFactory();
	}

	var_dump($factory->createAnimal()->getName());
	var_dump($factory->createAnimal()->getName());
	var_dump($factory->createAnimal()->getName());
	var_dump($factory->createAnimal()->getName());
	var_dump($factory->createAnimal()->getName());
	var_dump($factory->createAnimal()->getName());
}

myfunc();































