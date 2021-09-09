<?php

class SoapClient {


public __construct(?string $wsdl, array $options = [])
public __call(string $name, array $args): mixed
public __doRequest(
    string $request,
    string $location,
    string $action,
    int $version,
    bool $oneWay = false
): ?string
public __getCookies(): array
public __getFunctions(): ?array
public __getLastRequest(): ?string
public __getLastRequestHeaders(): ?string
public __getLastResponse(): ?string
public __getLastResponseHeaders(): ?string
public __getTypes(): ?array
public __setCookie(string $name, ?string $value = null): void
public __setLocation(?string $location = null): ?string
public __setSoapHeaders(SoapHeader|array|null $headers = null): bool
public __soapCall(
    string $name,
    array $args,
    ?array $options = null,
    SoapHeader|array|null $inputHeaders = null,
    array &$outputHeaders = null
): mixed
}

?>
