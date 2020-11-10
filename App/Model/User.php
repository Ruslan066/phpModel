<?php


namespace App\Model;

echo "Включен файл с моделью  User<br>";

class User
{
    public function __construct()
    {
        echo "<h1> Создается класс модели - самый тяжелый - потому что он обращается к базе данных</h1>";
    }
}
