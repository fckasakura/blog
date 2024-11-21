<div class="bar">
            <div class="bar__logo">Logo</div>
            <div class="bar__text">Привет, <?php echo $user["name"]?></div>
            <div class="bar__forms">
                <form action="php/logout.php" method="POST" class="bar__form form">
                    <a class="create" href="create-post.php">Добавить пост</a>
                        <input type="submit" name="logout" value="Выйти" class="form__btn">
                </form>
            </div>
        </div>