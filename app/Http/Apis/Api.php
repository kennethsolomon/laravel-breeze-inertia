<?php

namespace App\Http\Apis;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Traits\ForwardsCalls;

abstract class Api
{
    use ForwardsCalls;

    protected PendingRequest $http;

    public function __construct()
    {
        $this->http = $this->initialize();
    }

    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->http, $method, $parameters);
    }

    public abstract function initialize(): PendingRequest;
}

