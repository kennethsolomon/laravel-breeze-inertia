<?php

namespace App\Http\Apis;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class TestApi extends Api
{
    public function initialize(): PendingRequest
    {
        return Http::acceptJson()->baseUrl('https://jsonplaceholder.typicode.com');
    }
}
