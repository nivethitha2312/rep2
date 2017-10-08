<?php
echo "<pre>";
require 'vendor/medoo.php';

$database = new medoo([
'database_type' => 'pgsql',
'Database' => 'd7eorcto5pmnv6',
'Host' => 'ec2-54-235-123-159.compute-1.amazonaws.com',
'User' => 'famrewhhsamcyp',
'password' => 'c3a491725143c036350052fafd79aeb42571e2890c437894ce1be6f851995205',
'charset' => 'utf8',
'Port' => '5432',
]);

 
$status = $database->query("insert into salesforce.Account (AccountNumber, Name, Phone) values('".$_POST['AccNo']."','".$_POST['Name']."','".$_POST['phone']."')");

if($database->error()[2]) {
echo $database->error()[2];
} else {
echo "Success!!";
}
