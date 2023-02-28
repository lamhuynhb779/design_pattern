<?php

class Discount {
    public function calculate($value): float
    {
        return $value * 0.9;
    }
}

class Shipping {
    public function calculate(): int
    {
        return 5;
    }
}

class Fees {
    public function calculate($value): float
    {
        return $value * 1.05;
    }
}

// Facade Pattern
class ShopeeFacadePattern {
    public function __construct()
    {
        $this->discount = new Discount();
        $this->shipping = new Shipping();
        $this->fees = new Fees();
    }

    public function calculate($price)
    {
        $price = $this->discount->calculate($price);
        $price = $this->fees->calculate($price);
        $price += $this->shipping->calculate();

        return $price;
    }
}

// example
function buy($price)
{
    $shopeeFacadePattern =  new ShopeeFacadePattern();
    $result = $shopeeFacadePattern->calculate($price);
    echo "Price:" . $result;
}

buy(120000);
