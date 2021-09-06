<?php

// model, which uses in web service functions as parameter
class server{
  public $amount;
  public $sender;
  public $recipient;
}

$soap = new SoapClient($wsdl,$array);

$soap->user_function($params);

?>

#
