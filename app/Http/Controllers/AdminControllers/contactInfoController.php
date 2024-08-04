<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class contactInfoController extends Controller
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

        $contactInfo = ContactInfo::all();
        return view('dashboard.pages.contactInfo.index',compact('contactInfo'));
    }
}
