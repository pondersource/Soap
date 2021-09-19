### ~ UNDER CONSTRUCTION ~  

# Soap server-client in php :bulb:

##  What Soap does :question:

SOAP (formerly an acronym for Simple Object Access Protocol) is a messaging protocol specification for exchanging structured information in the implementation of web services in computer networks

## Soap Client :mag:

A SOAP client sends the XML document to a SOAP server. This SOAP request is posted using HTTP or HTTPS to a SOAP Request Handler running as a servlet on a Web server. ... A response from the service is returned to the SOAP Request Handler Servlet and then to the caller using the standard SOAP XML payload format.

## Soap Server :mag:

The Web Services Simple Object Access Protocol (SOAP) server is an application server plug-in that receives and sends XML data, and provides XML SOAP interfaces into the Tivoli Management Services components and the monitoring agents.

## Why do we need WSDL with SOAP :question:

- an envelope, which defines the message structure and how to process it

- a set of encoding rules for expressing instances of application-defined datatypes

- a convention for representing procedure calls and responses

## Functions needed for the soap Client :fountain_pen:

| Functions | Functionality |
| --- | --- |
| `construct()`| Soap Client constructor |
| `send_request()` |  Performs a SOAP request|
| `get_cookies()` | Get list of cookies |
| `set_cookie()` | Defines a cookie for SOAP requests |
| `get_functions()` | Returns list of available SOAP functions |
| `get_types()` | Get a list of SOAP types |
| `add_header()` | Add a SOAP header for subsequent calls |
| `get_last_request()` |  return: the last SOAP request |
| `get_last_request_headers()` | return: SOAP headers from the last response |
| `get_last_response()` | return: last SOAP response |
| `get_last_response_headers()` | return: SOAP headers from the last responses |
| `set_headers()` | Set SOAP headers for subsequent calls |
| `soap_call()` | Calls a SOAP function |


## Functions needed for the soap Server :fountain_pen:

| Functions | Functionality |
| --- | --- |
| `construct()` | Soap Server constructor  |
| `add_header()`| Adds a SOAP header to be returned with the response to the current request |
| `add_function()` |  Adds one or more functions to handle SOAP requests|
| `get_functions()` | Returns list of defined functions |
| `handle_request()` | Handles a SOAP request |
| `handle_fault()` | Issue Soap Server fault indicating an error |
| `set_class()` | Sets the class which handles SOAP requests |
| `set_object()` | Sets the object which will be used to handle SOAP requests |
| `set_persistence() ` | Sets Soap Server persistence mode |

# Keywords :old_key:

| Keywords | explanation |
| --- | --- |
| `AS4`| is a message protocol based on web services to securely exchange B2B messages between trading partners|


# Resources :scroll:

:link: [Soap](https://www.php.net/manual/en/book.soap.php)

:link: [Soap Client](https://www.php.net/manual/en/class.soapclient.php)

:link: [Soap Server](https://www.php.net/manual/en/class.soapserver.php)

:link: [Soap Fault](https://www.php.net/manual/en/class.soapfault.php)
