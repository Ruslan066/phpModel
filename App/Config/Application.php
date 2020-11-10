<?php


namespace App\Config;


class Application
{
    public function __construct()
    {
        Design::$layoutPath = __DIR__ . '/../View/MyTemplate/my.tpl.php';
    }
}
