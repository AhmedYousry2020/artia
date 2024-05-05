<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ReserveRequest;
use App\Models\Blog;
use App\Models\Consultation;
use App\Models\Doctor;
use App\Models\Faqs;
use App\Models\Reservation;
use App\Models\Service;
use App\Notifications\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SiteController extends Controller
{

    public function __construct()
    {
        View::share('consultations', Consultation::all());
        View::share('doctors', Doctor::all());
        View::share('blogs', Blog::all());
        View::share('faqs', Faqs::all());
        View::share('services', Service::all());

    }
   public function index()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('index');
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

   public function blog($name)
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    $blog = Blog::where('title_'.getLocale(),'like',$name)->first();
    return view('blog_details')->with('blog',$blog);
   }

   public function reservation()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('reservation');
   }

   public function services()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('services');
   }
   public function consultations()
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    return view('consultations');
   }
   public function service($name)
   {
    $lang = Session::get('lang', 'en');
    app()->setLocale($lang);
    $service = Service::where('name_'.getLocale(),'like',$name)->first();
    return view('service-details',compact('service'));
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
   public function makeReserve(ReserveRequest $request)
   {
        $data = $request->validated();
        $reservation = Reservation::create($data);

        if($reservation){
            return redirect()->back()->with('success', __('general.Send Successfully'));
        }
   }
}
