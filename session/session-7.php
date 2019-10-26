<?php
    session_name('MYSID');
    session_id('0000000001');
    session_start();
?>
<title>Сессии в PHP</title>
<?php
    echo session_name()  .  ' = '  .  session_id();
    session_unset();
    session_destroy();
?>