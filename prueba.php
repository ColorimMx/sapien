<?php
    //require_once 'vendor/autoload.php';
    require_once 'SWSDK.php';

    use SWServices\Stamp\StampService as StampService;

    try{
        header('Content-type: application/json');

        $params = array(
            "url"=>"http://services.test.sw.com.mx",
            "user"=>"cfdi@mariposacolorim.com",
            "password"=> "CIM+SW"
        );
        $cfdiSelladoPath=__DIR__."/assets/sellado.xml";//Ruta del xml sellado
        $xml = file_get_contents($cfdiSelladoPath);
        $stamp = StampService::Set($params);
        $result = $stamp::StampV4($xml);
        var_dump($result);
    }
    catch(Exception $e){
        header('Content-type: text/plain');
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }
?>