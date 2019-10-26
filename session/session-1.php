<title>Сессии в PHP</title>
<?php
    session_start();
    $_SESSION['login'] = 'admin';
    echo 'Мы поместили в массив $_SESSION одну пару ключ => значение.';
?>