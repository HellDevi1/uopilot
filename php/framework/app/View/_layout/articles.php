<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>style/style.css" />
    <title><?php echo $title; ?></title>
<style>
#login-item {
background: url("images/login.png") no-repeat left;}
.headerShodow {
background: url("images/shadow.png") repeat-x;}
.maintop
{background-image: url(./images/bg-main.png);}
.maintop-shadow {
background: url("images/shadow.png") repeat-x;}
.main-questions div { 
background: url("./images/divider.png") no-repeat right top;}
body {
margin-top:-18px;}
</style>
</head>
<body>
<header> 
            <div class="container">
                <div class="hdcenter">
                    <div class="hdleft">
                        <a href="./" id="logo" title="Surprice">
                            <img class="img" src="images/logo.png" alt="Surprice" width="200" height="40" />
                        </a>
                    </div>
                    <div class="hdright"> 
                        <div class="vhod">
                            <ul>
                                <li><a href="#" id="login-item">Вход</a>
                                <li><a href="#">Регистрация</a></li>
				</li><?php echo $menu; //MENUHA ?>
                            </ul>
                        </div>
                    </div>
                </div>    
            </div>
            <div  class="headerShodow"></div>
        </header>
<div class="maintop">
	<div class="content1">
        <h2 class="in-parag">Статьи</h2>
    <?php echo $content_for_layout; ?>
	</div>
</div>
        <footer>
            <div class="maintop-shadow"></div>
            <p>Copyright © 2016</p>
        </footer>
    </body>
</html>
<!DOCTYPE html>


