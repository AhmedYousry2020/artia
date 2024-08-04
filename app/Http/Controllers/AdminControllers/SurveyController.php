<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\JoinUsInfo;
use App\Models\Survey;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = Session::get('lang');
        app()->setLocale($lang);

        $survey = Survey::all();
        return view('dashboard.pages.survey.index',compact('survey'));
    }
}
