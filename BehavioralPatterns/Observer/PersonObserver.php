<?php

class PersonObserver {
    public function update(TrafficLightSubject $subject) {
        if ($subject->state == 'red') {
            echo "Stop !!!\n";
        } elseif ($subject->state == 'green') {
            echo "Run fast !!!\n";
        } else {
            echo "Run slow !!!\n";
        }
    }
}