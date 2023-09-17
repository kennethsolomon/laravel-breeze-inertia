<?php

namespace App\Http\Controllers;

use App\Services\DearService;

class TestingController extends Controller
{
    public function saleList(DearService $DearService)
    {
        return $DearService->getSaleLists(
            ['Page' => '1']
        );
    }
}
