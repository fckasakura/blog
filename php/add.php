<?php
session_start();
require "connect.php";
if(isset($_POST["add"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $announce = $_POST["announce"];
    $date = date('Y-m-d');
    $user_id = $_SESSION["id"];
    $connect->query("INSERT INTO `posts`(`title`, `announce`, `content`, `date`, `user_id`) VALUES('".$title."', '".$announce."', '".$content."', '".$date."', ".$user_id.")");
}
header("Location: ../");
?>