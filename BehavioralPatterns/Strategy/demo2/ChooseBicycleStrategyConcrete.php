<?php

class ChooseBicycleStrategyConcrete implements ChooseTransportStrategyInterface {

    public function action(): string
    {
        // do something
        return "transport by a bicycle";
    }
}