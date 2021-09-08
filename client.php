<?php

// model, which uses in web service functions as parameter
class xmlVars{
  public $amount;
  public $sender;
  public $recipient;
}

# ? initialize SOAP Client
$client = new SoapClient($wsdl,$array);

# ? Performs a SOAP request
# returns: The XML SOAP response
$client->send_request()

# return: List of cookies
$client->get_cookies(): ?array

# ? Defines a cookie for SOAP requests
# return: -
# parameters: name
  # cookie name
  # cookie value ( If not specified, the cookie will be deleted )
$client->set_cookie(string $name, ?string $value = null): void

# return: list of available SOAP functions
$client->get_functions(): ?array

# return: a list of SOAP types
$client->get_types(): ?array

# ? Add a SOAP header for subsequent calls
# return: bool
# parameters:
  # headers: The headers to be set. It could be SoapHeader object or array of SoapHeader objects. If not specified or set to null, the headers will be deleted
$client->add_headers(): bool

# return: the last SOAP request
# parameters: -
$client->get_last_request(): ?string

# return: SOAP headers from the last response
# parameters: -
$client->get_last_request_headers(): ?string

# return: last SOAP response
# parameters: -
$client->get_last_response(): ?string

# return: SOAP headers from the last responses
# parameters: -
$client->get_last_response_headers(): ?string

# ? Set SOAP headers for subsequent calls
# return: Boolean
# parameters:
  # headers: The headers to be set. It could be SoapHeader object or array of SoapHeader objects. If not specified or set to null, the headers will be deleted.
# Note : Calling thius method will replace any previous values
$client->set_headers(SoapHeader|array|null $headers = null): bool

# ? Calls a SOAP function
$client->soap_call()

?>
