<?php

class Context {

    private ChooseTransportStrategyInterface $strategy; 

    public function setStrategy(ChooseTransportStrategyInterface $strategy) {
        $this->strategy = $strategy;
    }

    public function executeStrategy(): string
    {
        return $this->strategy->action();
    }
}