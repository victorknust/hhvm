<?php
ini_set("soap.wsdl_cache_enabled",0);
$client = new SoapClient(dirname(__FILE__)."/bug41337_2.wsdl");
echo "ok\n";
?>