<?php

namespace App\Services;

use App\Http\Controllers\Home\PaymentController;
use App\Models\Articles;
use App\Models\ClientOrder;
use App\Models\Delivery;
use App\Models\Order;
use Session;

class CheckoutServices
{

    public function getCheckout($request)
    {
        if (!Session::has('cart')) {
            return view('cart.checkout');
        }
        $iDelivery = Delivery::findOrFail($request->delivery_id);
        $getDeliveryPrice = $iDelivery->is_warehouse ? 0 : intval($iDelivery->price);
        $oldCart = json_decode(Session::get('cart'), true);
        $oldCart['totalPrice'] += $getDeliveryPrice;
        $request->request->add(['total_price' => $oldCart['totalPrice']]);
        $newClient = ClientOrder::create($request->post());
//        $itemsToRm = $request->get('itemsToRm');
//        $itemsToRm = array();
//        $itemsToRm['item'] = '43';
//        if (!empty($itemsToRm)) {
//            foreach ($itemsToRm as $product_id) {
//                if (!array_key_exists($product_id, $oldCart['items'])) {
//                    foreach ($oldCart['items'] as $item) {
//                        Order::create([
//                            'client_id' => $newClient['id'],
//                            'product_id' => $item['item']['id'],
//                            'count_product' => $item['qty'],
//                            'price' => $item['actualPrice']
//                        ]);
//                    }
//                }
//            }
//        } else {
            foreach ($oldCart['items'] as $item) {
                $dataOrder = null;
                $dataOrder['product_id'] = $item['item']['id'];
                $dataOrder['count_product'] = $item['qty'];
                $dataOrder['price'] = $item['actualPrice'];

                if (array_key_exists('modifiers', $item)) {
                    foreach ($item['modifiers'] as $modifiers) {
                        $modifiers = array_change_key_case($modifiers);
                        foreach ($modifiers as $key => $modifier) {
                            $dataOrder[$key . '_id'] = $modifier['id'];
                        }
                    }
                }
                if (array_key_exists('attributes', $item)) {
                    $this->setAttribute($item,$dataOrder,$newClient);
                } else {
                    Order::create([
                        'client_id' => $newClient['id'],
                        'product_id' => $item['item']['id'],
                        'count_product' => $item['qty'],
                        'price' => $item['actualPrice']
                    ]);
                }
            }
//        }
        $orderInfo = [
            'date' => now()->toDateString(),
            'order_id' => $newClient->id
        ];
        $cashless_payment = $request->get('cashless_payment');
        $request->session()->forget('cart');
        if($request->session()->has('orderInfo')){
            $request->session()->forget('orderInfo');
        }
        $request->session()->put('orderInfo',$orderInfo);
        if ($cashless_payment == 'fastOrder') {
            return $newClient->id;
        }
        return $this->payment($cashless_payment);
    }

    public function payment(int $cashless_payment)
    {
        switch ($cashless_payment) {
            //Оплата наличными при получении
            case 1:
                return route('payment.success');
                break;
            //Банковская картой
            case 2:
                $payment = new PaymentController();
                $accountNo = '123456';
                $amount = '20,00';
                $currency = '933';
                $info = 'info';
                $returnUrl = route('payment.success');
                $failUrl = route('payment.fail');
                $payment->setPayment($accountNo, $amount, $currency, $info, $returnUrl, $failUrl);

                break;
            case 3:
                echo 'feature ERIP';

                break;
        }
    }

    public function setAttribute($item,$dataOrder, $client)
    {
        $productAttributes = $item['attributes'];

        if (isset($productAttributes['medallion_id'])) {
            $dataOrder['medallion_id'] = $productAttributes['medallion_id'];
        }
        if (isset($productAttributes['engraving_id'])) {
            $dataOrder['engraving_id'] = $productAttributes['engraving_id'];
        }
        $order = $client->order()->create($dataOrder);
        if (isset($productAttributes['name_left']) || isset($productAttributes['name_right'])) {
            $order->names_on_tombstone()->create($productAttributes);
        }
        if (isset($productAttributes['left_date_of_birth']) || isset($productAttributes['right_date_of_birth'])) {
            $order->dates_on_tombstone()->create($productAttributes);
        }
        if (isset($productAttributes['left_epitaph']) || isset($productAttributes['right_epitaph'])) {
            $order->epitaph()->create($productAttributes);
        }
        if (isset($productAttributes['left_stella_image_id']) || isset($productAttributes['right_stella_image_id'])) {
            $order->stella_image()->create($productAttributes);
        }
        if (isset($productAttributes['left_tombstone_image_id']) || isset($productAttributes['name_right'])) {
            $order->tombstone_image()->create($productAttributes);
        }
        if (isset($productAttributes['beautification_id'])) {
            $order->beautification()->create($productAttributes);
        }
    }
}

