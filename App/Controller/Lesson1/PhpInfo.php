<?php


namespace App\Controller\Lesson1;

echo "Включен файл с классном PhpInfo<br>";

class PhpInfo
{
    public function __construct()
    {
        phpinfo();
    }
}
