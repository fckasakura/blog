<?php
$connect = new mysqli('localhost', 'root', '', 'blog');
if(!$connect) {
    echo "Ошибка соединения с БД";
}
?>