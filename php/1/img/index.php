<!DOCTYPE html>
<HTML>
    <head>
		<TITLE>12 практическая</TITLE>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
    </head>
	<body>
        <div class="osnova">
            <div class="left"><img src="img/privacy-icon-19.png" width=100px height=90px;>
                <div class="sdvig">
                    <p>Добро пожаловать!<br><br>Введите правильное имя<br>пользователя и пароль для<br>входа на сайт!</p>
                    <a href="./index2.php">Регистрация</a>
                </div>
            </div>
            <?
            $login="123";
            $password="123";
        if(!isset($_POST['pass']))
            {
                echo '<div class="right">
                <div class="sdvig1">
                    <b><p class="vh">Вход</p></b>
                    <div class="vhod">
                    <form class="vhod1" method="post">
                        <b><p>Имя пользователя<br></b>
                        <input type="text" size="20" name="login">
                        <b><p>Пароль<br></b>
                        <input type="text" size="20" name="pass"><br><br>
                        <input type="submit" name="auth" value="Вход">
                    </form>
                </div>
            </div>
                
            </div>';
            }
            else if ($_POST['login']==$login && $_POST['pass']==$password)
            {
                echo "<h3>Привет:$login</h3>";
                echo '<a href="./index.php">loguot</a>';
            }
            else if ($_POST['login']!==$login || $_POST['pass']!=$password)
            {
                echo '<div class="right">
                <div class="sdvig1">
                    <b><p class="vh">Вход</p></b>
                    <div class="vhod">
                    <form class="vhod1" method="post">
                        <b><p>Имя пользователя<br></b>
                        <input type="text" size="20" name="login">
                        <b><p>Пароль<br></b>
                        <input type="text" size="20" name="pass"><br><br>
                        <input type="submit" name="auth" value="Вход">
                        <p style="color:red;">Неверный логин или пароль</p>
                    </form>
                </div>
            </div>
            </div>';
            }
            ?>
            
            <div class="clear"></div>
        </div>
        
	
	</body>
</HTML>