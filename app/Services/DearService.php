<?php
namespace App\Services;

use App\Http\Apis\DearApi;

class DearService {

    public function getSaleLists($params = []){
        return (new DearApi)->get('saleList', $params);
    }

}
