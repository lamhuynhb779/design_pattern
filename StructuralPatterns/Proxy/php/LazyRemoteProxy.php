<?php
include_once('IRemote.php');
include_once('Remote.php');

class LazyRemoteProxy implements IRemote {
    /**
     * Wrapee
     */
    private ?Remote $remote = null;

    public function turnOn(): void {
        var_dump($this->remote);

        if ($this->remote == null) {
            $this->remote = new Remote();
        }
        $this->remote->turnOn();
    }

    public function turnOff(): void {
        var_dump($this->remote);
        
        if ($this->remote == null) {
            $this->remote = new Remote();
        }
        $this->remote->turnOff();
    }
}