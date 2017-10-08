<?php
echo "<pre>";
require 'vendor/medoo.php';
$status = $database->query("insert into salesforce.Account (AccountNumber, Name, Phone) values('".$_POST['AccNo']."','".$_POST['Name']."','".$_POST['phone']."')");
if($database->error()[2]) {
echo $database->error()[2];
} else {
echo "Success!!";
}
