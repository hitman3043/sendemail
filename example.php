<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'vendor/autoload.php';

$ve = new hbattat\VerifyEmail('email_to_verify@hotmail.com', 'info@ve.hbattat.com');

var_dump($ve->verify());

echo '<pre>';print_r($ve->get_debug());
