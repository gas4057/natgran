<?php

namespace App\Services;

class CartServices
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
    public $totalDiscount = 0;
    public $totalPriceDif = 0;
    public $maxCountProduct = 5;


    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart['items'];
            $this->totalQty = $oldCart['totalQty'];
            $this->totalPrice = $oldCart['totalPrice'];
            $this->totalDiscount = $oldCart['totalDiscount'];
            $this->totalPriceDif = $oldCart['totalPriceDif'];
        }
    }

    public function add($item, int $id, int $countProduct)
    {
        $isNewItem = true;
        $storedItem = [
            'qty' => 0,
            'actualPrice' => $item->actual_price,
            'oldPrice' => $item->old_price,
            'item' => $item
        ];
        if ($this->items) {
            if (array_key_exists($id, (array)$this->items)) {
                $storedItem = $this->items->$id ?? $this->items[$id];
                $isNewItem = false;
            }
        }
        if($item->is_promotional){
            $item->old_price = $item->actual_price;
        }
        $storedItem['qty'] += $countProduct;
        $storedItem['actualPrice'] = intval($item->actual_price) * $storedItem['qty'];
        $storedItem['oldPrice'] = intval($item->old_price) * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty += $countProduct;
        $difCount = $storedItem['qty'] - $countProduct;
        $difCount = $difCount == 0 ? $countProduct : $difCount;
        $this->totalPrice += $item->actual_price * $countProduct;
        $this->totalDiscount += $item->old_price * $countProduct;
        if ($this->totalPriceDif != 0 && !isset($isNewItem)) {
            $this->totalPriceDif -= ($item->old_price * $difCount - $item->actual_price * $difCount);
        }
        $this->totalPriceDif = $this->totalDiscount - $this->totalPrice;
    }

    public function rmItemToCart($item, $product_id)
    {
        $totalCountItem = $this->items[$product_id]['qty'];
        if ($this->items && array_key_exists($product_id, $this->items)) {
            $storedItem = $this->items[$product_id];
        }
        unset($this->items[$product_id]);
        $actualPrice = intval($storedItem['actualPrice']);
        $oldPrice = intval($storedItem['oldPrice']);
        $this->totalQty -= $totalCountItem;
        $this->totalPrice -= $actualPrice;
        $this->totalDiscount -= $oldPrice;
        if($oldPrice !=0){
            $this->totalPriceDif -= ($oldPrice - $actualPrice);
        }
    }

//    public function addOneItemToCart($item, $id)
//    {
//        if ($this->items && array_key_exists($id, $this->items)) {
//            $storedItem = $this->items[$id];
//        }
//        $storedItem['qty']++;
//        $actualPrice = intval($item->actual_price);
//        $oldPrice = intval($item->old_price);
//        $this->items[$id]['actualPrice'] += $actualPrice;
//        $this->items[$id]['oldPrice'] += $oldPrice;
//        $this->items[$id]['qty']++;
//        $this->totalQty++;
//        $this->totalPrice += $item->actual_price;
//        $this->totalDiscount += $item->old_price;
//        $this->totalPriceDif += ($oldPrice - $actualPrice);
//    }

//    public function rmOneItemToCart($item, $id)
//    {
//        if ($this->items && array_key_exists($id, $this->items)) {
//            $storedItem = $this->items[$id];
//        }
//        $storedItem['qty'] -= 1;
//        $actualPrice = intval($item->actual_price);
//        $oldPrice = intval($item->old_price);
//        $this->items[$id]['actualPrice'] -= $actualPrice;
//        $this->items[$id]['oldPrice'] -= $oldPrice;
//        $this->items[$id]['qty'] -= 1;
//        $this->totalQty -= 1;
//        $this->totalPrice -= $item->actual_price;
//        $this->totalDiscount -= $item->old_price;
//        $this->totalPriceDif -= ($oldPrice - $actualPrice);
//    }

    public function addMonumentToCart($params)
    {
        $item = $params['product'];
        $itemPrice = $params['totalPrice'];
        $itemOldPrice = $params['oldTotalPrice'] == 0 ? $itemPrice : $params['oldTotalPrice'];
        $modifiers = $params['modifiers'];
        $productAttr = $params['attributes'];
        $qty = $params['qty'];

        $storedItem = [
            'qty' => $qty,
            'actualPrice' => $itemPrice * $qty,
            'oldPrice' => $itemOldPrice * $qty,
            'item' => $item,
            'modifiers' => $modifiers,
            'attributes' => $productAttr,
        ];
        if ($this->items) {
            if (array_key_exists($item->id, (array)$this->items)) {
                $storedItem = $this->items->$item->id ?? $this->items[$item->id];
            }
        }
        $this->items[$item->id . substr(now()->timestamp,-4)] = $storedItem;
        $this->totalQty += $qty;
        $this->totalPrice += $itemPrice * $qty;
        if (isset($itemOldPrice)) {
            $this->totalDiscount += $itemOldPrice * $qty;
            $this->totalPriceDif += ($itemOldPrice - $itemPrice)*$qty;
        }
    }

    public function changeCountItem($item, int $id, int $countProduct)
    {
        $storedItem = null;
        if (array_key_exists($id, (array)$this->items)) {
            $storedItem = $this->items->$id ?? $this->items[$id];
        } else {
            return $this->add($item, $id, $countProduct);
        }
        $lastCount = $storedItem['qty'];
        $lastActualPrice = $storedItem['actualPrice']/$storedItem['qty'];
        $lastOldPrice = $storedItem['oldPrice']/$storedItem['qty'];
        $storedItem['qty'] = $countProduct;
        $storedItem['actualPrice'] = $lastActualPrice * $storedItem['qty'];
        $storedItem['oldPrice'] = $lastOldPrice * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $lastOldPrice = $lastOldPrice == 0 ? $lastActualPrice : $lastOldPrice;

        //estimation for all cart.
        $this->totalQty = ($this->totalQty - $lastCount) + $countProduct;

        $this->totalPrice = ($this->totalPrice - $lastActualPrice * $lastCount);
        $this->totalPrice += $lastActualPrice * $countProduct;

        $this->totalDiscount = ($this->totalDiscount - $lastOldPrice * $lastCount);
        $this->totalDiscount += $lastOldPrice * $countProduct;

        if ($this->totalPriceDif != 0) {
            $this->totalPriceDif -= ($lastOldPrice * $lastCount - $lastActualPrice * $lastCount);
        }
        $this->totalPriceDif = $this->totalDiscount - $this->totalPrice;
    }

}
