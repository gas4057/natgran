<?php

namespace App\Services;


use App\Models\RecommendedCart;
use Illuminate\Support\Facades\Session;

class RecommendedCartServices
{

    public function getCarts($productTypeId = null)
    {
        $productTypeIds = [];
        $oldCart = json_decode(Session::get('cart'), true);
        if(isset($oldCart)){
            foreach ($oldCart['items'] as $key=>$item){
                $productTypeIds[$key] = $item['item']['type_id'];
            }
        }
        if(isset($productTypeId)){
            $productTypeId = [$productTypeId];
            $productTypeIds = array_merge($productTypeIds,$productTypeId);
        }
        $recommendedCarts = RecommendedCart::whereNotIn('product_type_id',$productTypeIds)
            ->get();
        return $recommendedCarts;
    }

}
