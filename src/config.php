<?php

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); //определяет именованную константу во время выполнения
define('PATH_SRC', ROOT_PATH . '/src/');
define('PATH_TPL', ROOT_PATH . '/templates/');

$baseFiles = []; //создаем массив

$baseFiles[] = PATH_SRC . 'database.php'; // в этом файле будем хранить контентные данные для страниц
$baseFiles[] = PATH_SRC . 'model.php'; // в этом файле будем иметь функции для поиска информации в $database
$baseFiles[] = PATH_SRC . 'controller.php'; // в этом файле реализовывается логика

foreach($baseFiles as $key => $value){ //подключаем все файлы
    include_once($value);
}

?>