<?php

class WriteFIle {
    public $fileName;
    public $fp; // указатель на открытый файл

    public function __construct($fileName)
    {
         $this->fileName = $fileName;
         if (!is_writable($this->fileName)) { // проверяем доступен ли файл для запеси
           echo "Файл {$this->fileName} недоступен";
           exit;
         }
         $this->fp = fopen($this->fileName, "a");
    }

    public function __destruct()
    {
        fclose($this->fp); // закрывает соединение
    }
    public function write ($str) { // запись в файл
       if (fwrite($this->fp, $str) === FALSE) {
           echo "Немогу произвести запись в файл";
           exit;
       }
    }

}