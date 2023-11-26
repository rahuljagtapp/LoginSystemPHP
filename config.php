<?php
/* this file conatnis databases configraution assuming you are user "root" and password ""
*/


define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','login');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn == false)
{
    dir('ERROR:CANNOT CONNCET');
}


?>
