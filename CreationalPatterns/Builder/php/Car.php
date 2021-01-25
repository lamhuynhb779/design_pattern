<?php

class Car {
    private int $numberOfWheels;
	private SeatBelt $seatBelt;
	private string $color;
	private Windscreen $windscreen;
    private Engine $engine;

    function __construct(int $numberOfWheels, SeatBelt $seatBelt, string $color, Windscreen $windscreen, Engine $engine) {
        $this->numberOfWheels = $numberOfWheels;
        $this->seatBelt = $seatBelt;
        $this->color = $color;
        $this->windscreen = $windscreen;
        $this->engine = $engine;
    }

    public function run(): void {
        echo "car is running";
    }

}