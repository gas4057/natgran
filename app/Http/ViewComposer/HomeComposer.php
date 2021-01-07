<?php

namespace App\Http\ViewComposer;

use App\Http\Controllers\Home\CartController;
use App\Models\Articles;
use App\Models\HomeArticle;
use App\Models\ProductType;
use App\Models\SiteContact;
use App\Models\SiteContactType;
use Session;
use Illuminate\View\View;

class HomeComposer
{
    protected $requisites;
    protected $cart;
    protected $catalogProducts;

    public function __construct()
    {
        $types = SiteContactType::all();
        foreach ($types as $type) {
            $contacts[$type->name] = SiteContact::where('type_id', $type->id)->get();
            if ($type->name == 'phone') {
                $contacts[$type->name] = SiteContact::where('type_id', $type->id)
                    ->take(4)
                    ->get();
            }
        }
        $this->site_contacts = $contacts;
        $this->requisites = Articles::where('key', 'site_requisites')
            ->first();
        $this->work_hours = Articles::where('key', 'work_hours')
            ->first();
        $this->cart = new CartController();
        $this->site_logo = HomeArticle::where('key', 'site_logo')->first();
        $this->site_logo_mobile = HomeArticle::where('key', 'site_logo_mobile')->first();
        $cart = Session::has('cart') ? Session::get('cart') : '';
        if (is_string($cart)) {
            $cart = json_decode($cart);
        }
        $this->cart = $cart;
        $this->catalogProducts = ProductType::with('subtype')->get();
        $this->modal_leave = Articles::where('key', 'leave_site')->first();
    }

    public function compose(View $view)
    {
        $view->with([
            'site_contacts' => $this->site_contacts,
            'header_logo' => [
                $this->site_logo,
                $this->site_logo_mobile
            ],
            'site_requisites' => $this->requisites,
            'work_hours' => $this->work_hours,
            'requisites' => $this->requisites,
            'cart' => $this->cart,
            'catalogProducts' => $this->catalogProducts,
            'modal_leave' => $this->modal_leave,
        ]);
    }
}
