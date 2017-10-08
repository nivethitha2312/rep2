<?php
echo "<pre>";
require 'vendor/medoo.php';

$database = new medoo([
	'database_type' => 'pgsql',
	'database_name' => 'dfukpgv609vivf',
	'server' => 'ec2-54-235-208-3.compute-1.amazonaws.com',
	'username' => 'fmlyiaxjnqktvd',
	'password' => 'T4MRGogtVOCXHTS9UpEXUHuPrR',
	'charset' => 'utf8',
	]);

	
$status = $database->query("insert into salesforce.account (accountNumber, name, phone) values('".$_POST['advCompName']."','".$_POST['advFname']."','".$_POST['advLname']."','".$_POST['phone']."')");

if($database->error()[2]) {
	echo $database->error()[2];
} else {
	echo "Success!!";
}