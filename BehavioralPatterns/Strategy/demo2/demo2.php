<?php

require("Context.php");
require("ChooseTransportStrategyInterface.php");
require("ChooseBicycleStrategyConcrete.php");
require("ChooseCarStrategyConcrete.php");
require("ChooseAirplaneStrategyConcrete.php");


/**
 * @param string $userWant
 * @return string
 */
function suggestTransportation(string $userWant): string
{
    $context = new Context();

    if ($userWant == 'cheap') {
        $context->setStrategy(new ChooseBicycleStrategyConcrete());
    }

    if ($userWant == 'acceptable') {
        $context->setStrategy(new ChooseCarStrategyConcrete());
    }

    if ($userWant == 'fastest') {
        $context->setStrategy(new ChooseAirplaneStrategyConcrete());
    }

    return $context->executeStrategy();
}

echo suggestTransportation("fastest");