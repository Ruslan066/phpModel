<?php


namespace App\Controller\Lesson2;

// echo "Включен файл с классом Form<br>";

use App\Model\User;

class Form
{
    // Создание класса контроллера
    public function __construct()
    {
        echo "Контроллер форм создан";
        $this->checkSubmitForm();
    }

    // Проверка - произошла ли передача данных по этому классу
    public function checkSubmitForm()
    {
        if(isset($_GET[__NAMESPACE__ . __CLASS__])) {
            echo "<h2> В форму были переданные данные</h2>";
            $this->doSubmitForm();
        } else {
            echo "<h3> В коллекции GET нужной переменной найдено не было</h3>";
        }
    }

    // Обработка данных по этому контроллеру
    private function doSubmitForm(){
        $user = new User();
    }

    // вывод формы этого контроллера
    public function echoForm()
    {
        echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="GET" >';
        echo '<input type="text" name="login" placeholder="login">';
        echo '<input type="password" name="pswd" placeholder="pswd">';
        echo '<input type="submit" name="' . __NAMESPACE__ . __CLASS__ . '">';
        echo'</form>';
    }
}
