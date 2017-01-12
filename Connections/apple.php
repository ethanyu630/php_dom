<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_apple = "localhost";
$database_apple = "dom";
$username_apple = "root";
$password_apple = "";
$apple = mysql_pconnect($hostname_apple, $username_apple, $password_apple) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query("SET NAMES UTF8");
?>