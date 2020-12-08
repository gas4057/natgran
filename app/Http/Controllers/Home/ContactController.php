<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\SendQuestionRequest;
use App\Models\Articles;
use App\Models\UserQuestions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

    /**
     * var $site_contacts app/Http/ViewComposer/HomeComposer.php
     */
    public function index()
    {
        $contact_us = Articles::where('Key', 'Contact_us')->first();
        $work_hours = Articles::where('Key', 'work_hours')->first();
        $breadcrumbs = 'contacts';
        return view('home.question', compact('contact_us', 'work_hours', 'breadcrumbs'));
    }

    public function sendQuestion(SendQuestionRequest $request)
    {
        try {
            $data = $request->except('_token');
            UserQuestions::create($data);
        } catch (\Exception $exception) {
            Log::info($exception);
            return response('Error', 400);
        }
        return response('Message was created successful', 201);
    }
}
