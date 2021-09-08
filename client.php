<?php

// model, which uses in web service functions as parameter
class xmlVars{
  public $amount;
  public $sender;
  public $recipient;
}

# ? initialize SOAP Client
$soap = new SoapClient($wsdl,$array);

# Performs a SOAP request
$soap->send_request()

# ? Get list of cookies
$soap->get_cookies()

# ? Defines a cookie for SOAP requests
$soap->set_cookie()

# ? Returns list of available SOAP functions
$soap->get_functions()

# ? Get a list of SOAP types
$soap->get_types()

# Sets the location of the web service to use
$soap->set_location()

# Add a SOAP header for subsequent calls
$soap->add_header()

# return: the last SOAP request
$soap->get_last_request()

# return: SOAP headers from the last response
$soap->get_last_request_headers()
# calls a SOAP function

# return: last SOAP response
$soap->get_last_response()

# return: SOAP headers from the last responses
$soap->get_last_response_headers()

# ? Set SOAP headers for subsequent calls
$soap->set_headers()

# ? Calls a SOAP function
$soap->soap_call()

?>
