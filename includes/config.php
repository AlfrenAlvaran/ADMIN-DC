<?php
define('DB_SERVER','sql208.infinityfree.com');
define('DB_USER','if0_37873256');
define('DB_PASS' ,'OX0sumfUHBW ');
define('DB_NAME', 'if0_37873256_shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>