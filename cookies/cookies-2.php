<?php
setcookie("message", "welcome", time() + 60);
echo "cookie установлены. Приветствие: $_COOKIE[message]";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";