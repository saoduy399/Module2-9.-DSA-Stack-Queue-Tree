<?php

include_once "Queue.php";
include_once "Element.php";

$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue("1");
$queue->enqueue("2");
$queue->enqueue("3");
$queue->enqueue("4");
$queue->enqueue("end");

echo "<pre>";
print_r($queue);