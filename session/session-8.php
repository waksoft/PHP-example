<?php
    session_name('MYSID');
    session_id('0000000001');
    session_start();
    if(  !isset(  $_SESSION['count']  )  )  $_SESSION['count']  =  0;
    $_SESSION['count']++;
    if(  $_SESSION['count']  >  100  )
    {
        session_unset();
        session_destroy();
    }
?>
<title>Сессии в PHP</title>
<h1>Счётчик №2</h1>
<p>Открыли страницу в разных браузерах <?=$_SESSION['count']?> раз.</p>
<p>Открыть пример в <a href="<?=$_SERVER['SCRIPT_NAME']?>">этой вкладке</a>.</p>