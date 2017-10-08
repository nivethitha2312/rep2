<?php
echo "<pre>";
require 'vendor/medoo.php';

$database = new medoo([
	'database_type' => 'pgsql',
	'database_name' => 'd2vn7547subbh8',
	'server' => 'ec2-54-221-221-153.compute-1.amazonaws.com',
	'username' => 'bjrmqvfqontxgk',
	'password' => '7e67552bb2c70f0a4ab752a6ef9764efbf286390604af0439a898758eef80c9a',
	'charset' => 'utf8',
	]);

	
$status = $database->query("insert into Salesforce.Account(accountNumber, name, phone) values('".$_POST['advCompName']."','".$_POST['advFname']."','".$_POST['advLname']."','".$_POST['phone']."')");

if($database->error()[2]) {
	echo $database->error()[2];
} else {
	echo "Success!!";
}
