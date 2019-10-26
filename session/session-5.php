<?php
    session_start();
    if(  !isset(  $_SESSION['count']  )  )  $_SESSION['count']  =  0;
    $_SESSION['count']++;
?>
<title>Сессии в PHP</title>
<h1>Счётчик</h1>
<p>В текущей сессии вы открыли страницу <?=$_SESSION['count']?> раз.</p>
<p>Открыть пример в <a href="<?=$_SERVER['SCRIPT_NAME']?>">этой вкладке</a>.</p>