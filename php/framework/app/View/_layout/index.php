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
                        <a href="#" id="logo" title="Surfpatrol">
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
<div class="content">
            <div class="maintop">
                <div class="top">
                    <div class="topcontent">
                        <h1>Защитите себя от вирусных атак из Интернета</h1><br>
                        <p>Браузер и его плагины могут быть небезопасны. Как уберечься от вирусов? С помощью <br> можно проверить защиту своего ПК и предотвратить вирусные атаки через браузер. Нажмите<br> кнопку «Проверить браузер» и следуйте рекомендациям. Мы подскажем вам, какие<br> программы нуждаются в защите. Будьте уверены в безопасности своего компьютера.</p>
                    </div>
                    <div class="imgbug">
                        <img src="<?php echo SERVER; ?>images/bug.png" alt="bug">
                    </div>
                </div>
            </div>
            <div class="knopka"><a href="#" class="button25">Проверить браузер &rarr;</a></div>
            <div class="maintop-shadow"></div>
            <div class="container">
	<div class="main-questions">
		<div>
			<h3>Уязвимый браузер и плагины &mdash; брешь в защите</h3>
			<p>Результаты проверки красного цвета &mdash; сигнал об уязвимости в браузере или плагине. Уязвимость &mdash; это слабое место, &laquo;дыра&raquo;, через которую злоумышленник может получить доступ к компьютеру и заразить его вирусом. Вы даже ничего не заметите: достаточно перейти на зараженный сайт, и все ваши пароли &laquo;утекут&raquo; к хакеру. Вовремя устанавливайте обновления и регулярно проходите проверки на нашем сайте.</p>
		</div>
		<div>
			<h3>Уязвимости необходимо устранять</h3>
			<p>Обновление (&laquo;заплатка&raquo;) &mdash; специальный файл, устраняющий ошибки в программах. Если в результате проверки был обнаружен небезопасный компонент, необходимо перейти по ссылке на красной кнопке. Вы автоматически будете перенаправлены на страницу сайта разработчика, где сможете скачать файл с обновлением.</p>
		</div>
		<div class="last">
			<h3>Установите расширение для вашего браузера</h3>
			<p>Расширениеавтоматизирует процесс контроля за состоянием защищенности вашего компьютера отменяя необходимость регулярно посещать сайт. Расширение незаметно для вас сканирует браузер, и в случае обнаружения небезопасного компонента (браузера или плагина), тут же предупредит вас об этом. По клику на значке расширения откроется страница отчета на сайте.</p>
		</div>
	</div>
</div>
        </div>
        <footer>
            <div class="maintop-shadow"></div>
            <p>Copyright © 2016</p>
        </footer>
    </body>
</html>