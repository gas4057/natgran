<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\SendQuestionRequest;
use App\Models\Articles;
use App\Models\ArticleType;
use App\Models\Review;
use App\Models\Gallery;
use App\Models\HomeArticle;
use App\Models\HomeProduct;
use App\Http\Controllers\Controller;
use App\Models\SiteContact;
use App\Models\UserQuestions;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        $products = HomeProduct::with('product1', 'product2', 'product3')->get();
        $articles = HomeArticle::where('alias', 'home_page')->with('block')->get();
        $galleries = Gallery::take(6)->get();
        $reviews = Review::take(8)->get();
        $news = ArticleType::where('type','Новости')
            ->first()
            ->articles
            ->take(5);
        $contacts = SiteContact::with('type')
            ->where('type_id',1)
            ->get();
        return view('home.home', compact('products', 'news','articles','galleries','reviews','contacts'));
    }

    public function sendQuestion(SendQuestionRequest $request)
    {
        try {
            $data = $request->except('_token');
            UserQuestions::create($data);
        }catch (\Exception $exception){
            Log::info($exception);
            return response('Error',400);
        }
        return response('Message was created successful',201);
    }

    public function privacyPolicy()
    {
       $data = Articles::where('key','privacy_policy')
           ->with('block')
           ->first();
        $breadcrumbs = 'PrivacyPolicy';
       return view('home.textPage',compact('data','breadcrumbs'));
    }

    public function offerAgreement()
    {
       $data = Articles::where('key','offer_agreement')
           ->with('block')
           ->first();
        $breadcrumbs = 'offerAgreement';
       return view('home.textPage',compact('data','breadcrumbs'));
    }
    public function aboutCompany()
    {
       $data = Articles::where('key','about_company')
           ->with('block')
           ->first();
        $breadcrumbs = 'aboutCompany';
       return view('home.textPage',compact('data','breadcrumbs'));
    }
}
