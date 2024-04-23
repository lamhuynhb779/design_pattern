<?php

// Singleton class

class Thanos 
{
    private static ?Thanos $instance = null;

    private function __construct() {}

    public static function getInstance(): Thanos {
        if (self::$instance == null) {
            self::$instance = new Thanos();
        }
        return self::$instance;
    }

    /**
     * The function is used to check instance existing
     */
    public function flickOff() {
        print_r("Thanos is flicking off. " . PHP_EOL);
    }
}