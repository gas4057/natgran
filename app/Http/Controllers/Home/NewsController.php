<?php

namespace App\Http\Controllers\Home;

use App\Models\Articles;
use App\Models\ArticleType;
use App\Models\News;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $news = ArticleType::where('type','Новости')
            ->first()
            ->articles()
            ->paginate(8);
        $breadcrumbs = 'news';
        return view('home.news', compact('news','breadcrumbs'));
    }

    public function showById($id)
    {
        $data = ArticleType::where('type','Новости')
            ->first()
            ->articles()
            ->findOrFail($id);
        $breadcrumbs = 'newsById';
        return view('home.textPage', compact('data','breadcrumbs'));
    }
}
