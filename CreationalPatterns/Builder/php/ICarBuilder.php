<?php

interface ICarBuilder {
	public function addWheels(int $numberOfWheels): CarBuilder;
	public function addSeatBelt(SeatBelt $seatBelt): CarBuilder;
	public function paint(string $color): CarBuilder;
	public function addWindscreen(Windscreen $windscreen): CarBuilder;
	public function addEngine(Engine $engine): CarBuilder;
	public function build(): Car;
}
