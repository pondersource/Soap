<?php

// model, which uses in web service functions as parameter
class xmlVars{
  public $amount;
  public $sender;
  public $recipient;
}

# ? initialize SOAP Client
$client = new SoapClient($wsdl,$array);

# Performs a SOAP request
$client->send_request()

# ? Get list of cookies
$client->get_cookies()

# ? Defines a cookie for SOAP requests
$client->set_cookie()

# ? Returns list of available SOAP functions
$client->get_functions()

# ? Get a list of SOAP types
$client->get_types()

# Sets the location of the web service to use
$client->set_location()

# Add a SOAP header for subsequent calls
$client->add_header()

# return: the last SOAP request
$client->get_last_request()

# return: SOAP headers from the last response
$client->get_last_request_headers()
# calls a SOAP function

# return: last SOAP response
$client->get_last_response()

# return: SOAP headers from the last responses
$client->get_last_response_headers()

# ? Set SOAP headers for subsequent calls
$client->set_headers()

# ? Calls a SOAP function
$client->soap_call()

?>
