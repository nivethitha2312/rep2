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
$status = $database->query("insert into salesforce.onboardformmodel__c (advertiser_company_name__c, advertiser_contact_first_name__c, advertiser_contact_last_name__c, advertiser_contact_phone__c, advertiser_web_address__c, advertiser_email_address__c, business_description__c, location_name__c, address_1__c, city__c, postal_code__c, phone__c) values('".$_POST['advCompName']."','".$_POST['advFname']."','".$_POST['advLname']."','".$_POST['advContactPhone']."','".$_POST['advWebAddr']."','".$_POST['advEmailAddr']."','".$_POST['businessDesc']."','".$_POST['locationName']."','".$_POST['addr1']."','".$_POST['city']."','".$_POST['postalCode']."','".$_POST['phone']."')");
if($database->error()[2]) {
	echo $database->error()[2];
} else {
	echo "Success!!";
}
