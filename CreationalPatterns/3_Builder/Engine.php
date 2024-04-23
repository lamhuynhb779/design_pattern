<?php

class Engine {
    private string $branch;

    function __construct(string $branch) {
        $this->branch = $branch;
    }
}