<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\SendQuestionRequest;
use App\Models\Articles;
use App\Models\Employee;
use App\Models\SiteContact;
use App\Models\SiteContactType;
use App\Models\UserQuestions;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $types = SiteContactType::all();
        foreach ($types as $type) {
            $site_contacts[$type->name] = SiteContact::where('type_id', $type->id)->get();
            if ($type->name == 'phone') {
                $site_contacts[$type->name] = SiteContact::where('type_id', $type->id)
                    ->take(4)
                    ->get();
            }
        }
        $contact_us = Articles::where('Key', 'Contact_us')->get();
        $work_hours = Articles::where('Key', 'work_hours')->get();
        $employees = Employee::take(4)->get();
        $breadcrumbs = 'contacts';
        return view('home.question', compact('site_contacts', 'contact_us','work_hours','employees','breadcrumbs'));
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
}
