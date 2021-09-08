<?php

// model, which uses in web service functions as parameter
class XmlVars{
  public $amount;
  public $sender;
  public $recipient;
  ...
  ...
}

# ? initialize SOAP Server
# return: -
# parametres:
  # wsdl: To use the SoapServer in WSDL mode, pass the URI of a WSDL file. Otherwise, pass null and set the uri option to the target namespace for the server.
  # array: blah blahS
$server=new Soap_server($wsdl,$array);

# ? Adds a SOAP header to be returned with the response to the current request.
# return: -
# parametres:
  # header: the
$soap->add_header();

# return: -
# parametres: function name as string
$soap->add_function($function_name);

# return: An array of the defined functions.
# parametres: -
$soap->get_functions($);

# return:  -
# parametres:
  # request: The SOAP request. If this argument is omitted, the request is assumed to be in the raw POST data of the HTTP request.
$soap->handle_request([$soap_request]);

$soap->handle_fault();

# returns: -
# parametres:
  # class: the name of exported /**
  # args: These optional parameters will be passed to the default class constructor during object creation.
  class ClassName extends AnotherClass
  {

    function __construct(argument)
    {
      // code...
    }
  }

$soap->set_class();

$server->set_object(new Service());

$soap->set_persistence();


# Notes
# In your class, if you declare a function with the name of the header, the function will be called when that header is received.




?>
