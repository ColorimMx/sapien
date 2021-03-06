<?php
require_once 'SWSDK.php';
use SWServices\Authentication\AuthenticationService as Authentication;

$params = array(
    "url"=>"http://services.test.sw.com.mx",
    "user"=>"cfdi@mariposacolorim.com",
    "password"=> "CIM+SW"
);
try {
    $auth = Authentication::auth($params);
	$result = $auth::Token();
	header('Content-type: text/plain');
	if($result->status == "success") {
		echo $result->data->token;
	} else { //lógica de error independiente para cada proyecto
		echo $result->message;
	}
} catch(Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>