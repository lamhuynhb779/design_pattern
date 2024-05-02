<?php

class Pig {
    public $name;
    private $color;
    private $hair;
    protected $isMale;

    function __construct($name, $color, $isMale = false)
    {
        $this->name = $name;
        $this->color = $color;
        $this->isMale = $isMale;
    }
}

function clientCode()
{
    $pig = new Pig('Tin', 'red', true);
    
    print_r($pig);

    $copiedPig = clone $pig;

    print_r($copiedPig);
}

clientCode();