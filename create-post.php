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
            <form action="php/add.php" method="POST" class="add-post">
            <h1 class="form__title">Создать новый пост</h1>
            <div class="fields__group">
                        <label for="title">Заголовок поста</label>
                        <input class="form__field" type="text" name="title" id="title">
                    </div>
                    <div class="fields__group">
                        <label for="announce">Анонс</label>
                        <textarea class="form__field" type="text" name="announce" id="announce"></textarea>
                    </div>
                    <div class="fields__group">
                        <label for="content">Текст</label>
                        <textarea class="form__field" type="text" name="content" id="content"></textarea>
                    </div>
                    <div class="fields__group">
                        <input type="submit" name="add" value="Добавить" class="form__btn">
                </div>
            </form>
        </div>
    </div>
</body>
</html>