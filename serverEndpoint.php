<?php

require_once('calcSoapServer.php');

$server = new SoapServer('calculator.wsdl');
$server->setClass('SimpleSoapServer');
$server->handle();

?>