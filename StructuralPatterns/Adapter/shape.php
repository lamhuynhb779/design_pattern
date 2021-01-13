<?php

interface IShape
{
	function draw($x1, $y1, $x2, $y2);
}

class LegacyLine
{
	function draw($x1, $y1, $x2, $y2){
		echo "Draw Line: " . $x1 . ", " . $y1 . ", " . $x2 . ", " . $y2;
		echo PHP_EOL;
	}
}

class LegacyRectangle
{
	function draw($x, $y, $w, $h){
		echo "Draw Rectangle: " . $x . ", " . $y . ", " . $w . ", " . $h;
		echo PHP_EOL;
	}
}

class LineAdapter implements IShape
{
	private $line;

	function __construct(LegacyLine $line){
		$this->line = $line;
	}
	
	function draw($x1, $y1, $x2, $y2){
		$this->line->draw($x1, $y1, $x2, $y2);
	}
}

class RectangleAdapter implements IShape
{
	private $rectangle;

	function __construct(LegacyRectangle $rectangle){
		$this->rectangle = $rectangle;
	}
	
	function draw($x1, $y1, $x2, $y2){
		$x = min($x1, $x2);
		$y = min($y1, $y2);
		$w = abs($x2 - $x1);
		$h = abs($y2 - $y1);
		$this->rectangle->draw($x, $y, $w, $h);
	}
}



$shapeList = array(
	new LineAdapter(new LegacyLine()),
	new RectangleAdapter(new LegacyRectangle()),
);

$x1 = 5;
$y1 = 10;
$x2 = -3;
$y2 = 2;

foreach($shapeList as $shape){
	$shape->draw($x1, $y1, $x2, $y2);
}