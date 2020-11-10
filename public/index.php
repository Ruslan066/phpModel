<?php
/* Точка входа. Все остальные работы с сайтом (WebApp) будут проходить через
 * запуск этого файла
 */

// Подключаем средства автозагрузки (посика) классов
// и зависимостей от библиотек
use App\Controller\Lesson2\Form;

require_once ('../vendor/autoload.php');

// $phpInfo = new \App\Controller\Lesson1\PhpInfo();
//$con = new Form();
//$con->echoForm();

// Настрока конфигурации сайта
$config = new \App\Config\Application();

App\Config\Design::render();

//*--------------------------------------------------
//* Проверяем, что пришло на сервер
/*
echo "<hr> GET: <br>";
var_dump($_GET);
echo "<hr>POST: <br>";
var_dump($_POST);
*/
