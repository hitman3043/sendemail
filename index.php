<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'VerifyEmail.php';
$ve = new hbattat\VerifyEmail('yahoo.com', 'hitman_codename408@yahoo.com', 25);
$ve->set_socket_timeout(3);
$ve->set_proxy('208.80.28.208', '8080');
var_dump($ve->verify());
echo "<pre>";
print_r($ve->get_debug());
echo "</pre>";
