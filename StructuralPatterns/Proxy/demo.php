<?php

class Director {
    public function receiveRequest($offer) {
        echo "Ok !! Offer:" . $offer;
    }
}

class Leader {
    private Director $director;

    public function __construct() {
        $this->director = new Director();
    }

    public function receiveRequest(string $offer) {
        // Leader sau khi nhận request sẽ đưa request lên cho sếp duyệt
        $this->director->receiveRequest($offer);
    }
}

class Developer {
    private string $offer;

    public function __construct($offer) {
        $this->offer = $offer;
    }

    public function sendRequest(Leader $leader) {
        $leader->receiveRequest($this->offer);
    }
}

$dev = new Developer("Upto 5k USD.");
$dev->sendRequest(new Leader());
