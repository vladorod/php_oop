<?php
require_once 'class/firstClass.php';
require_once 'class/Car.php';
require_once 'class/WriteFIle.php';

error_reporting(-1); // вывод ошибок

function debug($data) {
    echo `<pre>`. print_r($data) . `</pre>`;
}

$file = new WriteFIle(__DIR__.'\file.txt');
$file->write("Строка 1 ");
$file->write("Строка 2 ");
$file->write("Строка 3 ");
$file->write("Строка 4 ");
$file->write("Строка 5 ");
$file->write("Строка 6 ");