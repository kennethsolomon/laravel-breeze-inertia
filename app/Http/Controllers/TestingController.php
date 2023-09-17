<?php

namespace App\Http\Controllers;

use App\Services\DearService;

class TestingController extends Controller
{
    public function getSaleLists(DearService $DearService)
    {
        return $DearService->getSaleLists(
            ['Page' => '1']
        );
    }

    public function addCategory(DearService $DearService)
    {
        return $DearService->postCategory(
            ['Name' => 'zPhCollab-Kenneth']
        );
    }

    public function deleteCategory(DearService $DearService)
    {
        return $DearService->deleteCategory(
            ['ID' => '151bd998-6ed7-4c06-8e0f-fb35acec5f2d']
        );
    }
}
