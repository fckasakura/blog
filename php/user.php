<?php
require "connect.php";
if($_SESSION["id"]) {
    $user = $connect->query("SELECT * FROM `users` WHERE `id` = " . $_SESSION["id"])->fetch_assoc();
}
?>