<?php

// model, which uses in web service functions as parameter
class server{
  public $amount;
  public $sender;
  public $recipient;
  ...
  ...
}

// initialize SOAP Server
$server=new SoapServer($wsdl,$array);

$soap->addFunction($function_name);

$soap->handle([$soap_request]);

?>
