<?php
include('Car.php');
include('Engine.php');
include('SeatBelt.php');
include('Windscreen.php');
include('ICarBuilder.php');


class CarBuilder implements ICarBuilder {
	public int $numberOfWheels;
	public SeatBelt $seatBelt;
	public string $color;
	public Windscreen $windscreen;
	public Engine $engine;

	function __construct() {

	}
	
	public function addWheels(int $numberOfWheels): CarBuilder {
		$this->numberOfWheels = $numberOfWheels;
		return $this;
	}

	public function addSeatBelt(SeatBelt $seatBelt): CarBuilder {
		$this->seatBelt = $seatBelt;
		return $this;
	}

	public function paint(string $color): CarBuilder {
		$this->color = $color;
		return $this;
	}

	public function addWindscreen(Windscreen $windscreen): CarBuilder {
		$this->windscreen = $windscreen;
		return $this;
	}

	public function addEngine(Engine $engine): CarBuilder {
		$this->engine = $engine;
		return $this;
	}

	public function build(): Car {
		return new Car(
			$this->numberOfWheels
			, $this->seatBelt
			, $this->color
			, $this->windscreen
			, $this->engine
		);
	}
}