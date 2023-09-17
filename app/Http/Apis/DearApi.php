<?php

namespace App\Http\Apis;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class DearApi extends Api
{
    public function initialize(): PendingRequest
    {
        return Http::withHeaders(config('services.dearinventory'))
            ->timeout(600)
            ->acceptJson()
            ->baseUrl('https://inventory.dearsystems.com/ExternalApi/v2');
    }
}
