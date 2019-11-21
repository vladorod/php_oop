<?php
require_once 'class/firstClass.php';
require_once 'class/Car.php';

error_reporting(-1); // вывод ошибок

function debug($data) {
    echo `<pre>`. print_r($data) . `</pre>`;
}

$o1 = new Car;
$o2 = new Car;

$o2->color = 'red';
$o2->wheels = 8 ;
$o2->speed = 200;
$o2->year = 2002;



echo "<h3>О моем авто:</h3>
Марка: {$o2->brand} <br>
Цвет: {$o2->color} <br>
Скорость: {$o2->speed} <br>
Колеса: {$o2->wheels} <br>
Год выпуска: {$o2->year}
";