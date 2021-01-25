<?php
include_once('IRemote.php');

class Remote implements IRemote {
    public function turnOn(): void {
        echo "Turn on the light" . PHP_EOL;
    }

    public function turnOff(): void {
        echo "Turn off the light" . PHP_EOL;
    }
}
