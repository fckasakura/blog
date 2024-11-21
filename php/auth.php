<?php
session_start();
require "connect.php";
if($_POST["authemail"] == '' || $_POST["authpass"] == '') {
    echo "Не все поля заполнены!";
    exit();
}
if(isset($_POST["auth"])) {
    $mail = $_POST["authemail"];
    $password = md5($_POST["authpass"]);
    $user = $connect->query("SELECT * FROM `users` WHERE `email` = '".$mail."' AND `password` = '".$password."'")->fetch_assoc();
    $_SESSION["id"] = $user["id"];
    header("Location: ../");
}
?>