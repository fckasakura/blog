<?php
require "connect.php";
require "user.php";
$posts = $connect->query("SELECT * FROM `posts`");
while($post = $posts->fetch_assoc()):
?>
 <div class="post">
                    <h1 class="post__title"><?= $post["title"] ?></h1>
                    <p class="post__data"><?= $post["date"] ?></p>
                    <p class="post__announce"><?= $post["announce"] ?></p>
                    <a href="" class="post__btn">Открыть пост</a>
                </div>
<?php endwhile; ?>