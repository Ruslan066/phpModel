<?php


namespace App\Config;

/**
 * Class Design
 * Содержит в себе настройки для геренации всей страницы
 * @package Lib
 */
class Design
{
    // Корневая ссылка
    static $baseUrl = "http://localhost:63342/pvd811php/public";

    // Заголовок страницы
    static $pageTitle = "My Application";

    // Переменные для головы страницы
    static $head;

    // Главный файл мастер страницы
    static $layoutPath = __DIR__ . "\..\View\Layout\layout.tpl.php";

    // Процесс сбора решения и вывод его, как результат работы сайта
    static public function render() {
        require_once (Design::$layoutPath);
    }
}
