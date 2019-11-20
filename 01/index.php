<?php
require_once 'class/firstClass.php';
require_once 'class/Car.php';

function debug($data) {
    echo `<pre>`. print_r($data) . `</pre>`;
}

$o1 = new Car;
$o2 = new Car;

$o2->color = 'red';
$o2->wheels = 8 ;
$o2->speed = 200;
$o2->year = 2002;


debug($o2);
debug($o1);

ehco