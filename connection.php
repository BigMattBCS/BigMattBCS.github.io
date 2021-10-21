<?php

$dbhost = "http://68.132.112.242:3306"; //  was localhost
$dbuser = "root";
$dbpassword = "";
$dbname = "ozone";

if (!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname))
{

    die("failed to connect");
}
