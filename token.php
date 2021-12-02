<?php
require_once 'vendor/autoload.php';
use SWServices\Authentication\AuthenticationService as Authentication;

$params = array(
    "url"=>"http://services.test.sw.com.mx",
    "user"=>"cfdi@mariposacolorim.com",
    "password"=> "CIM+SW"
);
try
{
    header('Content-type: application/json');
    $auth = Authentication::auth($params);
    $token = $auth::Token();
    echo $token;
}
catch(Exception $e)
{
    header('Content-type: text/plain');
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>