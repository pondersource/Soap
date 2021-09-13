<?php

class SoapServer {
/* Methods */
public __construct(?string $wsdl, array $options = [])
public add_function(array|string|int $functions): void
public add_soap_header(SoapHeader $header): void
public fault(
    string $code,
    string $string,
    string $actor = "",
    mixed $details = null,
    string $name = ""
): void
public get_functions(): array
public handle(?string $request = null): void
public set_class(string $class, mixed ...$args): void
public set_object(object $object): void
public set_persistence(int $mode): void
}

?>
