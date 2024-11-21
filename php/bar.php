<div class="bar">
            <div class="bar__logo">Logo</div>
            <div class="bar__text">Привет, гость</div>
            <div class="bar__forms">
                <form action="php/register.php" method="POST" class="bar__form form">
                    <h1 class="form__title">Зарегистрироваться</h1>
                    <div class="fields__group">
                        <label for="name">Ваше имя</label>
                        <input class="form__field" type="text" name="name" id="name">
                    </div>
                    <div class="fields__group">
                        <label for="email">Ваш email</label>
                        <input class="form__field" type="email" name="email" id="email">
                    </div>
                    <div class="fields__group">
                        <label for="pass">Ваш пароль</label>
                        <input class="form__field" type="password" name="pass" id="pass">
                    </div>
                    <div class="fields__group">
                        <input type="submit" name="reg" value="Зарегистрироваться" class="form__btn">
                    </div>
                </form>
                <form action="php/auth.php" method="POST" class="bar__form">
                    <h1 class="form__title">Войти</h1>
                    <div class="fields__group">
                        <label for="email">Ваш email</label>
                        <input class="form__field" type="email" name="authemail" id="email">
                    </div>
                    <div class="fields__group">
                        <label for="pass">Ваш пароль</label>
                        <input class="form__field" type="password" name="authpass" id="pass">
                    </div>
                    <div class="fields__group">
                        <input type="submit" name="auth" value="Войти" class="form__btn">
                    </div>
                </form>
            </div>
        </div>