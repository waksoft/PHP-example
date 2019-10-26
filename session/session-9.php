<?php
    session_set_cookie_params(60);
    session_start();
    if(  !isset(  $_SESSION['count']  )  )   $_SESSION['count']  =  0;
    $_SESSION['count']++;
?>
<title>Сессии в PHP</title>
<h1>Счётчик №3</h1>
<p>Значение счётчика: <?=$_SESSION['count']?>.</p>
<p>Открыть счётчик в <a href="<?=$_SERVER['SCRIPT_NAME']?>">этой вкладке</a>.</p>