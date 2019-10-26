<?php
setcookie("message", "welcome", time() - 60*60*24*32);
echo "cookie удалены";
?>