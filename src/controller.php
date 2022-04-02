<?php

//print_r($_SERVER);
if($_SERVER['SCRIPT_NAME'] == '/index.php'){
    printPage1('/index.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/bytovka.php'){
    printPage2('/bytovka.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/catalog.php'){
    printPage3('/catalog.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/contacts.php'){
    printPage4('/contacts.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/price.php'){
    printPage5('/price.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/delivery.php'){
    printPage6('delivery.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/photogallery.php'){
    printPage7('photogallery.php', $database);
}elseif($_SERVER['SCRIPT_NAME'] == '/rent.php'){
    printPage8('rent.php', $database);
}

function printPage1($url_key, &$database){  
    $data = searchData($database ,'/index.php'); //вызываем функции из файла model.php и задаем ей аргументы
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){ //если строчка не пустая и директория существует, то выводим наш заданный файл, т.е main.php
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage2($url_key, &$database){
    $data = searchData($database ,'/bytovka.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage3($url_key, &$database){
    $data = searchData($database ,'/catalog.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage4($url_key, &$database){
    $data = searchData($database ,'/contacts.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage5($url_key, &$database){
    $data = searchData($database ,'/price.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage6($url_key, &$database){
    $data = searchData($database ,'/delivery.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage7($url_key, &$database){
    $data = searchData($database ,'/photogallery.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
function printPage8($url_key, &$database){
    $data = searchData($database ,'/rent.php');
    if(!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    }else{
        die('в базе данных нет данных для вызываемой страницы');
    }
}
?>