<?php

function searchData(&$database, $url_key){
    //print_r($databse);

    foreach ($database['pages'] as $key => $value){ //мы перебираем наш массив pages 
        if ($value['url_key'] == $url_key){ //если наш найденный в $database url_key найден, то возвращаем $value
            return $value;
        }
    }

    return false;
}

?>