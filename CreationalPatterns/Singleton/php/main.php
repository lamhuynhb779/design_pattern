<?php

include('Thanos.php');

Thanos::getInstance()->flickOff();

// Multi thread

// $thread1 = new \parallel\Runtime();
// $thread2 = new \parallel\Runtime();

// $thread_function = function () {
//     include_once('Thanos.php');
//     Thanos::getInstance()->flickOff();
// };

// $thread1->run($thread_function);
// $thread2->run($thread_function);
