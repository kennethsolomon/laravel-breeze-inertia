<?php
namespace App\Services;

use App\Http\Traits\DearApiTrait;

class DearService {
    use DearApiTrait;

    public function getSaleLists($params)
    {
        $sale_lists = $this->DearSaleLists($params);

        foreach ($sale_lists['SaleList'] as $sale_list) {
            //Do Something
           dump($sale_list);
        }
    }

    public function postCategory($params)
    {
        $category = $this->DearPostCategory($params);

        dump($category);
    }

    public function deleteCategory($params)
    {
        $category = $this->DearDeleteCategory($params);

        dump($category);
    }

}
