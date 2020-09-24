<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Review;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::orderBy('created_at', 'DESC')->paginate(6);
        $pageTitle = 'Галерея';
        $breadcrumbs = 'gallery';
        return view('home.gallery', compact('images','pageTitle','breadcrumbs'));
    }

    public function reviews()
    {
        $images = Review::orderBy('created_at', 'DESC')->paginate(6);
        $pageTitle = 'Отзывы';
        $breadcrumbs = 'reviews';
        return view('home.gallery', compact('images','pageTitle','breadcrumbs'));
    }
}
