<?php session_start();
require "php/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Блог</title>
</head>
<body>
    <div class="container">
        <?php
        if(!$user) {
            require "php/bar.php";
        }
        else {
            require "php/bar-user.php";
        }
        ?>
        <div class="main-content">
            <div class="postslist">
                <?php
                require "php/posts.php";
                ?>
               
            </div>
        </div>
    </div>
</body>
</html>