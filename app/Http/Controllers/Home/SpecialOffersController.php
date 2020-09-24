<?php

namespace App\Http\Controllers\Home;

use App\Models\ArticleType;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SpecialOffersController extends Controller
{
    public function index()
    {
        $now = Carbon::now()->getTimestamp();
        $offers = ArticleType::where('type','Акции')
            ->first()
            ->articles()
            ->active()
            ->paginate(8);
        foreach ($offers as $offer) {
            if (Carbon::create( Carbon::now()->toDateString())->between($offer->date_start, $offer->date_end)) {
                $offer->is_actual = 'true';
            } else {
                $offer->is_actual = 'false';
            }
        }
        $breadcrumbs = 'offers';
        return view('home.offers', compact('offers', 'products','breadcrumbs'));
    }

    public function showById($id)
    {
        $data = ArticleType::where('type','Акции')
            ->first()
            ->articles()
            ->findOrFail($id);
        $breadcrumbs = 'offersId';
        return view('home.textPage', compact('data','breadcrumbs'));
    }
}
