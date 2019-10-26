<title>Сессии в PHP</title>
<?php
    session_start();
    echo session_name().' = '.session_id();
?>