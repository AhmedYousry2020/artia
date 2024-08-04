<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\ContactInfo;
use App\Models\JoinUsInfo;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class JoinInfoController extends Controller
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

        $joinInfo = JoinUsInfo::all();
        return view('dashboard.pages.joinInfo.index',compact('joinInfo'));
    }
}
