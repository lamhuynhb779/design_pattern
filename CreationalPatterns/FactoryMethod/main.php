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

function myfunc() {	
	$factory = new BasicAnimalFactory();
	var_dump($factory->createAnimal()->getName());
}

myfunc();































