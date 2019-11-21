<?php
require_once 'class/firstClass.php';
require_once 'class/Car.php';

error_reporting(-1); // вывод ошибок

function debug($data) {
    echo `<pre>`. print_r($data) . `</pre>`;
}

$o1 = new Car('черный', 10, 1000, 'volvo');
$o2 = new Car('красный', 120, 1020, 'bmw');


echo $o1->getCarInfo();
echo $o2->getCarInfo();
