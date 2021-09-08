# Soap server/client in php

##  What Soap does

SOAP (formerly an acronym for Simple Object Access Protocol) is a messaging protocol specification for exchanging structured information in the implementation of web services in computer networks

## Soap Client

A SOAP client sends the XML document to a SOAP server. This SOAP request is posted using HTTP or HTTPS to a SOAP Request Handler running as a servlet on a Web server. ... A response from the service is returned to the SOAP Request Handler Servlet and then to the caller using the standard SOAP XML payload format.

## Soap Server

The Web Services Simple Object Access Protocol (SOAP) server is an application server plug-in that receives and sends XML data, and provides XML SOAP interfaces into the Tivoli Management Services components and the monitoring agents.

## Why do we need WSDL with SOAP?

- an envelope, which defines the message structure and how to process it

- a set of encoding rules for expressing instances of application-defined datatypes

- a convention for representing procedure calls and responses

## Functions needed for the soap Client

| Functions | Functionality |
| --- | --- |
| `construct()`| Soap Client constructor |
| `send_request()` |  Performs a SOAP request|
| `get_cookies()` | Get list of cookies |
| `set_cookie()` | Defines a cookie for SOAP requests |
| `get_functions()` | Returns list of available SOAP functions |
| `get_types()` | Get a list of SOAP types |
| `set_location()` | Sets the location of the web service to use |
| `add_header()` | Add a SOAP header for subsequent calls |
| `get_last_request()` |  return: the last SOAP request |
| `get_last_request_headers()` | return: SOAP headers from the last response |
| `get_last_response()` | return: last SOAP response |
| `get_last_response_headers()` | return: SOAP headers from the last responses |
| `set_headers()` | Set SOAP headers for subsequent calls |
| `soap_call()` | Calls a SOAP function |


## Functions needed for the soap Server

- public __construct()

- add_header()

- add_function()

- get_functions()

- handle_request()

- handle_fault()

- set_class()

- set_object()

- set_persistence()
