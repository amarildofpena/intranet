<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_INTRA = "localhost";
$database_INTRA = "intranet";
$username_INTRA = "root";
$password_INTRA = "";
$INTRA = mysql_pconnect($hostname_INTRA, $username_INTRA, $password_INTRA) or trigger_error(mysql_error(),E_USER_ERROR); 
?>