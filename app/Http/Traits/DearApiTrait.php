<?php
namespace App\Http\Traits;

use App\Http\Apis\DearApi;

trait DearApiTrait {
    // Sale Lists
    public function DearSaleLists($params = []){
        $response = (new DearApi)->get('saleList', $params);
        return $response->json();
    }


    // Category
    public function DearPostCategory($params = []){
        // Params
        // ['Name' => 'product-name']
        $response = (new DearApi)->post('ref/category', $params);
        return $response->json();
    }

    public function DearDeleteCategory($params = []){
        // Params
        // ['ID' => 'product-category-id']
        $response = (new DearApi)->delete('ref/category', $params);
        return $response->json();
    }
    // End Category
}
