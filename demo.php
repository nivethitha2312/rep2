<?php
echo "<pre>";
require 'vendor/medoo.php';

$database = new medoo([
'database_type' => 'pgsql',
'database_name' => 'd5tq92ehojnej2',
'server' => 'ec2-107-20-214-99.compute-1.amazonaws.com',
'username' => 'dezdhxglycrzos',
'password' => '7c045045735e003ab2b8ac238830d323c3b24c187be4e9ce42a6b39cb536b1c6',
'charset' => 'utf8',
]);


$status = $database->query("insert into salesforce.Account (AccountNumber, Name, Phone) values('".$_POST['AccNo']."','".$_POST['Name']."','".$_POST['phone']."')");
if($database->error()[2]) {
echo $database->error()[2];
} else {
echo "Success!!";
}
