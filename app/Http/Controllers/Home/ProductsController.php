<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProdSortRequest;
use App\Models\Banner;
use App\Models\Product;
use App\Services\ProductsControllerServices;
use App\Services\RecommendedCartServices;
use Illuminate\Http\Request;
use Session;

class ProductsController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new ProductsControllerServices();
    }

    public function index()
    {
        try {
            $data = $this->service->index();
        } catch (\Exception $e) {
            \Log::debug($e);
            return abort(404);
        }
        return $data;

    }

    public function showByType(Request $request, int $type, int $subtype = null)
    {
        try {
            $data = $this->service->showByType($request, $type, $subtype);
        } catch (\Exception $e) {
            \Log::debug($e);
            return abort(404);
        }
        return $data;
    }

    public function sort(ProdSortRequest $request)
    {
        try {
            $data = $this->service->sort($request);
        } catch (\Exception $e) {
            \Log::debug($e);
            return abort(404);
        }
        return $data;
    }

    public function showById($id, RecommendedCartServices $service)
    {
        $product = Product::with('type')
            ->findOrFail($id);
        $cart = Session::has('cart') ? json_decode(Session::get('cart'), true) : null;
        $countItem = 1;
        if (isset($cart)) {
            if (array_key_exists($id, (array)$cart['items'])) {
                $countItem = $cart['items'][$id]['qty'];
            }
        }
        if ($product->type_id < 3) {
        $service = new MonumentController();
        $response =  $service->index($id);
        return $response;
        }
        $breadcrumbs = 'product';
        $recommendedCarts = $service->getCarts();
        $banner = Banner::where('key','monument')->first();
        return view('products.byId',
            compact('product', 'breadcrumbs', 'countItem', 'recommendedCarts', 'banner'));
    }

    public function decor()
    {
        try {
            $data = $this->service->decor();
        } catch (\Exception $e) {
            \Log::debug($e);
            return abort(404);
        }
        return $data;
    }
}
