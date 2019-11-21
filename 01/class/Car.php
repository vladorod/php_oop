<?php
  class Car
  {
      public $color;
      public $wheels = 4;
      public $speed = 180;
      public $year = 2002;
      var $brand; // анохронизм из 4 версии php тогда небыло public privated использовали var

      public $path = __DIR__ .'/test';

      public function getCarInfo() {
          echo "<h3>О моем авто:</h3>
                Марка: {$this->brand} <br>
                Цвет: {$this->color} <br>
                Скорость: {$this->speed} <br>
                Колеса: {$this->wheels} <br>
                Год выпуска: {$this->year}";
      }

  }

