<?php

class SoapClient {


public __construct(?string $wsdl, array $options = [])
public __call(string $name, array $args): mixed
public __do_request(
    string $request,
    string $location,
    string $action,
    int $version,
    bool $oneWay = false
): ?string
public __get_cookies(): array
public __get_functions(): ?array
public __get_last_request(): ?string
public __get_last_request_headers(): ?string
public __get_last_response(): ?string
public __get_last_response_headers(): ?string
public __get_types(): ?array
public __set_cookie(string $name, ?string $value = null): void
public __set_location(?string $location = null): ?string
public __set_soap_headers(SoapHeader|array|null $headers = null): bool
public __soap_call(
    string $name,
    array $args,
    ?array $options = null,
    SoapHeader|array|null $inputHeaders = null,
    array &$outputHeaders = null
): mixed
}

?>
