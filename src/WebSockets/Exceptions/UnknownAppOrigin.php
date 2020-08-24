<?php

namespace BeyondCode\LaravelWebSockets\WebSockets\Exceptions;

class UnknownAppOrigin extends WebSocketException
{
    public function __construct(string $appOrigin)
    {
        $this->message = "Could not find app origin `{$appOrigin}`.";

        $this->code = 4001;
    }
}
