# Soap server/client in php

##  What Soap does

SOAP (formerly an acronym for Simple Object Access Protocol) is a messaging protocol specification for exchanging structured information in the implementation of web services in computer networks

## Soap Client

A SOAP client sends the XML document to a SOAP server. This SOAP request is posted using HTTP or HTTPS to a SOAP Request Handler running as a servlet on a Web server. ... A response from the service is returned to the SOAP Request Handler Servlet and then to the caller using the standard SOAP XML payload format.

## Soap Server

The Web Services Simple Object Access Protocol (SOAP) server is an application server plug-in that receives and sends XML data, and provides XML SOAP interfaces into the Tivoli Management Services components and the monitoring agents.

## Why do we need WSDL with SOAP?

-an envelope, which defines the message structure[1] and how to process it
-a set of encoding rules for expressing instances of application-defined datatypes
-a convention for representing procedure calls and responses
## Functions needed for the soap Server

 1) public __construct()

 2) add_header()

 3) add_function()

 4) get_functions()

 5) handle_request()

 6) handle_fault()

 7) set_class()

 8) set_object()

 9) set_persistence()


 ## Functions needed for the soap Client
