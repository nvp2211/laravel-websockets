<?php

namespace BeyondCode\LaravelWebSockets\WebSocketServer\Pusher\Exceptions;

class InvalidConnection extends PusherException
{
    public function __construct()
    {
        $this->message = 'Invalid Connection';

        $this->code = 4009;
    }
}