<?php

# ? initialize SOAP Server
# return: -
# parametres:
  # wsdl: To use the SoapServer in WSDL mode, pass the URI of a WSDL file. Otherwise, pass null and set the uri option to the target namespace for the server.
  # array: blah blah
$server=new Soap_server($wsdl,$array);

# ? Adds a SOAP header to be returned with the response to the current request.
# return: -
# parametres:
  # header: the
$server->add_header();

# return: -
# parametres:
  # function name
$server->add_function($function_name);

# return: An array of the defined functions.
# parametres: -
$server->get_functions($);

# return:  -
# parametres:
  # request: The SOAP request. If this argument is omitted, the request is assumed to be in the raw POST data of the HTTP request.
$server->handle_request([$server_request]);

# ? Sends a response to the client of the current request indicating an error.
# return: -
# parametres:
  # code: the error code to return
  # string: A string identifying the actor that caused the fault
  # name: The name of the fault. This can be used to select a name from a WSDL file.
$server->handle_fault();

# returns: -
# parametres:
  # class: the name of exported class
$server->set_class();

# return: -
# parametres:
  # object: The object to handle the requests.
$server->set_object(object $object);

# return: -
# parametres:
$server->set_persistence()

# Notes
# In your class, if you declare a function with the name of the header, the function will be called when that header is received.

?>
