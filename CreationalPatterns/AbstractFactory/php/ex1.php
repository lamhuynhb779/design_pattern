<?php

interface BeerInterface
{
    /**
     * Name of the beer (Heineken, Budweiser, Guinness, etc.)
     * @return string
     */
    public function getName();
}

interface CocktailInterface
{
    /**
     * Name of the cocktail (Blue Lagoon, Long Island, Mojito, etc.)
     * @return string
     */
    public function getName();

    /**
     * Get all ingredients that were mixed to obtain that cocktail
     * @return array
     */
    public function getIngredients();
}

class Budweiser implements BeerInterface
{
    /**
     * Name of the beer (Heineken, Budweiser, Guinness, etc.)
     * @return string
     */
    public function getName()
    {
        return "Budweiser";
    }
}

class Heineken implements BeerInterface
{
    /**
     * Name of the beer (Heineken, Budweiser, Guinness, etc.)
     * @return string
     */
    public function getName()
    {
        return "Heineken";
    }
}


class LongIsland implements CocktailInterface
{
    /**
     * Name of the cocktail (Blue Lagoon, Long Island, Mojito, etc.)
     * @return string
     */
    public function getName()
    {
        return "Long Island";
    }

    /**
     * Get all ingredients that were mixed to obtain that cocktail
     * @return array
     */
    public function getIngredients()
    {
        return [
            'Tequila',
            'Vodka',
            'Light rum',
            'Triple sec',
            'Gin',
            'Coca-Cola'
        ];
    }
}

class Mojito implements CocktailInterface
{
    /**
     * Name of the cocktail (Blue Lagoon, Long Island, Mojito, etc.)
     * @return string
     */
    public function getName()
    {
        return "Mojito";
    }

    /**
     * Get all ingredients that were mixed to obtain that cocktail
     * @return array
     */
    public function getIngredients()
    {
        return [
            'White rum',
            'Sugar cane juice',
            'Lime juice',
            'Sparkling water',
            'Mint'
        ];
    }
}

abstract class AbstractBarFactory
{
    /**
     * Creates a fresh Beer
     * @return BeerInterface
     */
    abstract public function createBeer();

    /**
     * Creates a nice Cocktail
     * @return CocktailInterface
     */
    abstract public function createCocktail();
}

class FirstCheapBar extends AbstractBarFactory
{
    /**
     * Creates a fresh Beer
     * @return AbstractBarFactory\BeerInterface
     */
    public function createBeer()
    {
        return new Budweiser();
    }

    /**
     * Creates a nice Cocktail
     * @return AbstractBarFactory\CocktailInterface
     */
    public function createCocktail()
    {
        return new LongIsland();
    }
}

class SecondCheapBar extends AbstractBarFactory
{
    /**
     * Creates a fresh Beer
     * @return AbstractBarFactory\BeerInterface
     */
    public function createBeer()
    {
        return new Heineken();
    }

    /**
     * Creates a nice Cocktail
     * @return AbstractBarFactory\CocktailInterface
     */
    public function createCocktail()
    {
        return new Mojito();
    }
}

foreach ([new FirstCheapBar(), new SecondCheapBar()] as $bar) {
	echo $bar->createBeer()->getName() . PHP_EOL;
	echo $bar->createCocktail()->getName() . PHP_EOL;
}
