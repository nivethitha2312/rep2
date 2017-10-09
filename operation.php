<?php
echo "<pre>";
require 'vendor/medoo.php';

$database = new medoo([
	'database_type' => 'pgsql',
	'database_name' => 'd8u1bhm2rg8fr2',
	'server' => 'ec2-23-21-197-231.compute-1.amazonaws.com',
	'username' => 'vgmqvqwxnequpq',
	'password' => '57f6b31623d5d585a1b2127779b0dd15ab31c94d392cc5a715175647cdad4c3a',
	'charset' => 'utf8',
	]);

$status = $database->query("insert into salesforceaccount.account (accountNumber, name, phone) values('".$_POST['advCompName']."','".$_POST['advFname']."','".$_POST['advLname']."','".$_POST['phone']."')");

if($database->error()[2]) {
	echo $database->error()[2];
} else {
	echo "Success!!";
}
