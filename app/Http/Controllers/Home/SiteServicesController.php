<?php

namespace App\Http\Controllers\Home;

use App\Models\Articles;
use App\Http\Controllers\Controller;
use App\Models\ArticleType;
use App\Models\Banner;

class SiteServicesController extends Controller
{
    public function service()
    {
        $type = 'Услуги';
        $service = ArticleType::where('type','Услуги')
            ->first()
            ->articles;
        $breadcrumbs = 'service';
        $banner = Banner::first();
        return view('service.index', compact('service','breadcrumbs','type','banner'));
    }

    public function showById($id)
    {
        $data = ArticleType::where('type','Услуги')
            ->first()
            ->articles()
            ->findOrFail($id);
        $breadcrumbs = 'serviceById';
        return view('service.byId', compact('data','breadcrumbs'));
    }

    public function formalization()
    {
        $type = 'Оформление';
        $service = ArticleType::where('type','Оформление')
            ->first()
            ->articles;
        $breadcrumbs = 'formalization';
        $banner = Banner::first();
        return view('service.index', compact('service','breadcrumbs','type','banner'));
    }

    public function remuneration()
    {
        $type = 'Оплата';
        $service = ArticleType::where('type','Оплата')
            ->first()
            ->articles;
        $breadcrumbs = 'remuneration';
        $banner = Banner::first();
        return view('service.index', compact('service','breadcrumbs','type','banner'));
    }
}
