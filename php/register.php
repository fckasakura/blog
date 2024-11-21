<?php
require "connect.php";
if($_POST["name"] == '' || $_POST["email"] == '' || $_POST["pass"] == '') {
    echo "Не все поля заполнены!";
    exit();
}
if(isset($_POST["reg"])) {
    $name = $_POST["name"];
    $mail = $_POST["email"];
    $password = md5($_POST["pass"]);

    $connect->query("INSERT INTO `users`(`name`, `email`, `password`) VALUES('".$name."', '".$mail."', '".$password."')");
    header("Location: ../");
}
?>