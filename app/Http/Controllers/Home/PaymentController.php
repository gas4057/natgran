<?php

namespace App\Http\Controllers\Home;

use App\Models\Articles;
use App\Services\PaymentServices;
use App\Http\Controllers\Controller;
use App\Services\RecommendedCartServices;
use Session;

class PaymentController extends Controller
{

    public function setPayment($accountNo, $amount, $currency, $info, $returnUrl, $failUrl)
    {
        try {
            $service = new PaymentServices();
            $service->addInvoiceByCard($accountNo, $amount, $currency, $info, $returnUrl, $failUrl);
        } catch (\Exception $e) {
            \Log::info($e);
            return abort(404);
        }
    }

    public function getFail(RecommendedCartServices $services)
    {
        $article = Articles::where('key', 'orderFail')
                ->with('block')
                ->first() ?? null;
        $recommendedCarts = $services->getCarts();
        $orderInfo = Session::has('orderInfo') ? Session::pull('orderInfo') : null;
        if (!isset($orderInfo)) {
            return redirect()->route('home');
        }
        return view('payment.fail', compact('article', 'recommendedCarts', 'orderInfo'));
    }

    public function getSuccess(RecommendedCartServices $services)
    {
        $article = Articles::where  ('key', 'orderSuccess')
                ->with('block')
                ->first() ?? null;
        $recommendedCarts = $services->getCarts();
        $orderInfo = Session::has('orderInfo') ? Session::pull('orderInfo') : null;
        if (!isset($orderInfo)) {
            return redirect()->route('home');
        }
        return view('payment.success', compact('article', 'recommendedCarts', 'orderInfo'));
    }
}
