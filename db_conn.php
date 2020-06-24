<?php

$sname= "sql212.epizy.com";
$unmae= "epiz_26052496";
$password = "3M0LUMT7hiH4";

$db_name = "epiz_26052496_ecomm";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}