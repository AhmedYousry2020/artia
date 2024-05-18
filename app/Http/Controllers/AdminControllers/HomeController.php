<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $lang = Session::get('lang','en');
        app()->setLocale($lang);

        $blogs = Blog::take(5)->get();
        $doctors = Doctor::take(5)->get();
        $consultations = Consultation::take(5)->get();
        $services = Service::take(5)->get();

        return view("dashboard.index",compact('blogs','doctors','consultations','services'));
    }

    public function changeLanguage()
    {
        app()->setLocale('ar');
    }
}
