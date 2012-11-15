<?php
require_once "Fibonacci.php";
$fibonacci = new fibonacci();
$box = $fibonacci->calc(100);
print_r($box);
