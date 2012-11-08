<?php
require_once "Queue.php";
require_once "Stack.php";

$box = array(12,11,22);
$add = 33;
$queue = new Queue($box);

$box = $queue->enqueue($add);
print_r($box);

$pop = $queue->dequeue();
print_r($pop);

$box = $queue->showBox();
print_r($box);


echo "stack";
$box = array(12,11,22);
$stack = new Stack($box);
$box = $stack->box();
print_r($box);

$stack->push($add);

$stack->showBox();

$pop = $stack->pop();
print_r($pop);

$stack->showBox();
