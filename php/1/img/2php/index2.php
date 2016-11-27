<!DOCTYPE html>
<HTML>
    <head>
		<TITLE>Регистрация</TITLE>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
    </head>
	<body>
        <?php
        function lines($file)
         {
          if(!file_exists($file))exit("Файл не найден");
          $file_arr = file($file);
          $lines = count($file_arr);
          return $lines;
         }
        $flag = false;
            if(isset($_POST['lastname'])
                && isset($_POST['name'])
                && isset($_POST['middlename'])
                && isset($_POST['denb'])
                && isset($_POST['mesyac'])
                && isset($_POST['god'])
                && isset($_POST['login'])
                && isset($_POST['password'])
                && isset($_POST['pass_again'])
                && isset($_POST['email']))
            {
                if(preg_match('/^[-0-9a-z_\.]+@[-0-9a-z_\.]+\.[a-z]{2,6}$/i', $_POST['email']))
                {
                    $file="db.txt";
                    $str=$_POST['lastname']."|"
                        .$_POST['name']."|"
                        .$_POST['middlename']."|"
                        .$_POST['denb']."|"
                        .$_POST['mesyac']."|"
                        .$_POST['god']."|"
                        .$_POST['login']."|"
                        .$_POST['password']."|"
                        .$_POST['pass_again']."|"
                        .$_POST['email']."|"
                        .$_POST['about']."\n";
                    if (!empty($_POST['login']))
                    {
                        $tmp = file_get_contents($file, true);
                        $line=explode("\n", $tmp);
                        $index=lines($file);
                            for ($i=0;$i<$index;$i++)
                            {
                                $cell = explode("|", $line[$i]);
                                if(@$cell[7]==$_POST['login'])
                                {
                                    $flag=true;
                                    break;
                                }
                            }
                        if($flag==true)
                        {
                            $errSameLogin='Такой логин уже существует';
                        }
                    }
                    else $errLogin = 'Введите логин';
                }
                else $errEmail = 'Вы ввели некоректный email';
                if (!empty($_POST['lastname'])) {
                    if (!preg_match('/^[uА-Я].[а-я]+[^0-9\t]$/u', $_POST['lastname'])) {
                        $errLastname = 'Введите не более 15 символов';
                    }
                }
                    else
                    {
                        if (!empty($_POST['name']))
                        {
                            if(strlen($_POST['name'])>=15)
                            {
                                if(!preg_match('/^[uА-Я].[а-я]+[^0-9\t]$/u', $_POST['last_name']))
                                    $errName = 'Введите не более 15 символов';
                            }
                            else
                            {
                                if(strlen($_POST['middlename'])>= 30)
                                {
                                $errMiddlename = 'Введите не более 25 символов';
                                }
                                else if($_POST['password'] != $_POST['pass_again'])
                                    {
                                        $errAgain_pass = 'Пароли не совпадают!';
                                    }
                                    else if(strlen($_POST['password'])>=15 || strlen($_POST['password'])<=4)
                                        {
                                            $errPassword = 'Введите не менее 4 символов и не более 10!';
                                        }
                                        else
                                            {
                                                file_put_contents($file, $str, FILE_APPEND);
                                                $win = '<br>Аккаунт успешно создан';}
                                            }

                                            /*else if (!empty($_POST['errorOp']))
                                            {
                                                if(!empty($_POST['errorOp1']))
                                                {
                                                    if(!empty($_POST['errorOp2']))
                                                    {

                                                        $win =  '<br>Аккаунт успешно создан';
                                                    }
                                                    else $errorOp2='Введите год';
                                                }
                                                else $errorOp1='Введите месяц';
                                            }
                                            else $errorOp='Введите день';*/
                            }

                        }

            }
        else
        {
            $errLogin = 'Введите логин';
            $errName = 'Введите имя';
            $errLastname = 'Введите фамилию';
            $errMiddlename = 'Введите отчество';
            $errPassword = 'Введите пароль';
            $errEmail = 'Введите email';



        }
        ?>
        <a href="./index.php">Back</a>
        <div class="auth">
			<form method=post>
                <div class="polya">
                    <div class="edin">

                        <div class="spanright">
                            <input  type="text" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname'];?>">
                            <span class="error1"><?php if(isset($errLastname)) echo $errLastname;?></span>
                        </div>
                        <div class="spanleft">Фамилия&nbsp;<span class="error" title="Обязательное поле для заполнения">*&nbsp;</span></div>

                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                                <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">
                                <span class="error"><?php if(isset($errName)) echo $errName;?></span>
                        </div>
                        <div class="spanleft">Имя&nbsp;<span class="error" title="Обязательное поле для заполнения">*&nbsp;</span></div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                            <input type="text" name="middlename" value="<?php if(isset($_POST['middlename'])) echo $_POST['middlename'];?>">
                            <span class="error"><?php if(isset($errMiddlename)) echo $errMiddlename;?></span>
                        </div>
                        <div class="spanleft">Отчество&nbsp;<span class="error" title="Обязательное поле для заполнения">*&nbsp;</span></div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanleft">
                            <!--День-->
                            <select class="data" name="denb" value="<?php if(isset($_POST['denb'])) echo $_POST['denb'];?>">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select>
                            <!--Месяц-->
                            <select class="data1" name="mesyac" value="<?php if(isset($_POST['mesyac'])) echo $_POST['mesyac'];?>">
                                <option>Январь</option>
                                <option>Февраль</option>
                                <option>Март</option>
                                <option>Апрель</option>
                                <option>Май</option>
                                <option>Июнь</option>
                                <option>Июль</option>
                                <option>Август</option>
                                <option>Сентябрь</option>
                                <option>Октябрь</option>
                                <option>Ноябрь</option>
                                <option>Декабрь</option>
                            </select>
                            <!--Год-->
                            <select class="data" name="god" value="<?php if(isset($_POST['god'])) echo $_POST['god'];?>">
                                <option >2002</option>
                                <option>2001</option>
                                <option>2000</option>
                                <option>1999</option>
                                <option>1998</option>
                                <option>1997</option>
                                <option>1996</option>
                                <option>1995</option>
                                <option>1994</option>
                                <option>1993</option>
                                <option>1992</option>
                                <option>1991</option>
                                <option>1990</option>
                                <option>1989</option>
                                <option>1988</option>
                                <option>1987</option>
                                <option>1986</option>
                                <option>1985</option>
                                <option>1984</option>
                                <option>1983</option>
                                <option>1982</option>
                                <option>1981</option>
                                <option>1980</option>
                            </select>
                            <span class="clear_dva"></span>
                            <span class="error1"><?php if(isset($errorOp)) echo $errorOp;?></span>
                            <span class="error1"><?php if(isset($errorOp1)) echo $errorOp1;?></span>
                            <span class="error1"><?php if(isset($errorOp2)) echo $errorOp2;?></span>
                         </div>
                        <div class="spanleft" >Дата рождения&nbsp;</div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                            <input type="text" name="login" value="<?php if(isset($_POST['login'])) echo $_POST['login'];?>">
                            <span class="clear_dva"></span>
                            <span class="error1"><?php if(isset($errLogin)) echo $errLogin;?></span>
                            <span class="error1"><?php if(isset($errSameLogin)) echo $errSameLogin;?></span>
                        </div>
                        <div class="spanleft">Логин&nbsp;<span class="error" title="Обязательное поле для заполнения">*&nbsp;</span></div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                            <input type="password" name="password" value="">
                            <span class="clear_dva"></span>
                            <span class="error1 dasdf"><?php if(isset($errPassword)) echo $errPassword;?></span>
                        </div>
                        <div class="spanleft">Пароль&nbsp;<span class="error" title="Обязательное поле для заполнения">*&nbsp;</span></div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                            <input type="password" name="pass_again" value="">
                            <span class="clear_dva"></span>
                            <span class="error1"><?php if(isset($errAgain_pass)) echo $errAgain_pass;?></span>
                        </div>
                        <div class="spanleft">Повторите пароль&nbsp;<span class="error" title="Обязательное поле для заполнения">*&nbsp;</span>
                        </div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                            <span class="clear_dva"></span>
                            <span class="error1"><?php if(isset($errEmail)) echo $errEmail;?></span>
                        </div>
                        <div class="spanleft" >Email&nbsp;<span class="error"  title="Обязательное поле для заполнения">*&nbsp;</span></div>
                        <span class="clear_dva"></span>
                    </div>
                    <div class="edin">
                        <div class="spanright">
                            <textarea type="text" name="about" value="<?php if(isset($_POST['about'])) echo $_POST['about'];?>"></textarea></br>
                        </div>
                        <div class="spanleft">О себе&nbsp;</div>
                        <span class="clear_dva"></span>
                    </div>

                <div class="registr">
                    <input class="button15" type="submit" value='Регистрация'>
                    <input type="reset" value='Reset'>
                    <span class="clear_dva"></span>
                    <span><?php if(isset($win)) echo $win;?></span>
                </div></div>
			</form>
        </div>
	</body>
</HTML>