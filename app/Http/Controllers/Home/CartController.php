<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\Cart\AddItemRequest;
use App\Http\Requests\Cart\OrderRequest;
use App\Models\Delivery;
use App\Models\Product;
use App\Services\CartServices;
use App\Services\CheckoutServices;
use App\Services\RecommendedCartServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CartController extends Controller
{
    public function changeCountItem(AddItemRequest $request)
    {
        //TODO set env session lifeTime = 525600
        $countProduct = $request->get('products_count');
        $monumentId = $request->has('monument_id') ? $request->get('monument_id') : null;
        $product = Product::findOrFail($request->get('product_id'));
        $product_id = isset($monumentId) ? $monumentId : $request->get('product_id');
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $oldCart = json_decode($oldCart, true);
        $cart = new CartServices($oldCart);
        if ($cart->items) {
            $cart->changeCountItem($product, $product_id, $countProduct);
        } else {
            $cart->add($product, $product_id, $countProduct);
        }
        $cart = json_encode($cart);
        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    /* получить товары из корзины.*/
    public function getCart()
    {
        $breadcrumbs = 'cart';
        if (!Session::has('cart')) {
            return view('cart.cart', compact('breadcrumbs'));
        }
        $cart = json_decode(Session::get('cart'), true);
        $cities = Delivery::all()->where('is_warehouse',false);
        $freeDeliveryCity = Delivery::where('is_warehouse',true)
            ->first();
        $service = new RecommendedCartServices();
        $recommendedCarts = $service->getCarts();
        return view('cart.cart',
            [
                'cart' => $cart,
                'cities' => $cities,
                'freeDeliveryCity' => $freeDeliveryCity,
                'breadcrumbs' => $breadcrumbs,
                'recommendedCarts' => $recommendedCarts,
            ]);
    }

//    public function addOneItemToCart(Request $request)
//    {
//        $product_id = $request->get('product_id');
//        if (!Session::has('cart')) {
//            return view('cart.cart');
//        }
//        $product = Products::findOrFail($product_id);
//        $oldCart = json_decode(Session::get('cart'), true);
//        $cart = new CartServices($oldCart);
//        $cart->addOneItemToCart($product, $product_id);
//        $cart = json_encode($cart);
//        $request->session()->put('cart', $cart);
//        return redirect()->refresh();
//    }

//    public function rmOneItemToCart(Request $request)
//    {
//        $product_id = $request->get('product_id');
//        $countProduct = $request->get('product_qty');
//        if (!Session::has('cart')) {
//            return view('cart.cart');
//        }
//        $product = Products::findOrFail($product_id);
//        $oldCart = json_decode(Session::get('cart'), true);
//        $cart = new CartServices($oldCart);
//        $cart->rmOneItemToCart($product, $product_id);
//        $cart = json_encode($cart);
//        $request->session()->put('cart', $cart);
//
//        return redirect()->back();
//    }

    public function RmItemToCart(Request $request)
    {
        $monumentId =  $request->get('monument_id');
        $product_id = $request->get('product_id');
        if (!Session::has('cart')) {
            return view('cart.cart');
        }
        $product = Product::findOrFail($product_id);
        $product_id = $monumentId;
        $oldCart = json_decode(Session::get('cart'), true);
        $cart = new CartServices($oldCart);
        $cart->rmItemToCart($product, $product_id);
        $cart = json_encode($cart);
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function addMonumentToCart($params)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $oldCart = json_decode($oldCart, true);
        $cart = new CartServices($oldCart);
        $cart->addMonumentToCart($params);
        $cart = json_encode($cart);
        Session::put('cart', $cart);
    }

    public function getCheckout(OrderRequest $request)
    {
        try {
            $service = new CheckoutServices();
            return $service->getCheckout($request);
        } catch (\Exception $e) {
            \Log::info($e);
            return abort(400);
        }
    }

}
