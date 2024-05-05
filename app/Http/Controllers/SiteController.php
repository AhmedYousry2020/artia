<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Blog;
use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Faqs;
use App\Models\Service;
use App\Notifications\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{

   public function index()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);

    $blogs = Blog::all();
    $consultations = Consultation::all();
    $doctors = Doctor::all();
    $faqs = Faqs::all();
    $services = Service::all();

    return view('index',compact('blogs','consultations','doctors','faqs','services'));
   }
   public function contact()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('contact');
   }
   public function about()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('about');
   }
   public function doctors()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('doctors');
   }

   public function blogs()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('blogs');
   }

   public function reservation()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('reservation');
   }

   public function services()
   {$lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('services');
   }


   public function contactUs(ContactRequest $request)
   {
        $data = $request->validated();
        $users= [];
        $info = array('details'=>$data);
        Mail::send('mail', $info , function($message) use ($data) {
            $message->to('info@raus.sa', 'raus')->subject
               ('New Message');
            $message->from($data['email'], $data['name']);
         });
        return redirect()->back()->with('success', __('general.Send Successfully'));
   }
}
