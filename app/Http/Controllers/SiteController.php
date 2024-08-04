<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\JoinUsRequest;
use App\Http\Requests\ReserveRequest;
use App\Http\Requests\ServeyRequest;
use App\Http\Requests\SurveyRequest;
use App\Models\Blog;
use App\Models\Consultation;
use App\Models\ContactInfo;
use App\Models\Doctor;
use App\Models\Faqs;
use App\Models\JoinUsInfo;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\Survey;
use App\Notifications\ContactUS;
use Cohensive\OEmbed\Facades\OEmbed;
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
    return view('index');
   }
   public function contact()
   {
    return view('contact');
   }
   public function survey()
   {
    return view('survey');
   }
   public function join_us()
   {
    return view('join-us');
   }
   public function about()
   {
    return view('about');
   }
   public function doctors()
   {
    return view('doctors');
   }

   public function blogs()
   {
    return view('blogs');
   }

   public function blog($name)
   {
    $blog = Blog::where('title_'.getLocale(),'like',$name)->first();
    return view('blog_details')->with('blog',$blog);
   }

   public function reservation()
   {
    return view('reservation');
   }

   public function services()
   {
    return view('services');
   }
   public function consultations()
   {
    return view('consultations');
   }
   public function service($name)
   {
    $service = Service::where('name_'.getLocale(),'like',$name)->first();
    return view('service-details',compact('service'));
   }

   public function doctor($name)
   {
    $doctor = Doctor::where('name_'.getLocale(),'like',$name)->first();
    $video = OEmbed::get($doctor->video)->html();
        return view('doctor-details',compact('doctor', 'video'));
   }

   public function contactUs(ContactRequest $request)
   {
        $data = $request->validated();
        $contactData = ContactInfo::create($data);
        $users= [];
        $info = array('details'=>$data);
        // Mail::send('mail', $info , function($message) use ($data) {
        //     $message->to('info@artia.sa', 'artia')->subject
        //        ('New Message');
        //     $message->from($data['email'], $data['name']);
        //  });
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

   public function makeSurvey(SurveyRequest $request)
   {
        $data = $request->validated();
        $survey = [];
        $keys=['Q1','Q2','Q3','Q4','Q5','Q6'];
        array_push($survey,array_merge($data['survey1'],$data['survey2'],$data['survey3'],$data['survey4'],$data['survey5'],$data['survey6']));
        $data['survey'] = json_encode(array_combine($keys, $survey[0]));
        $survey = Survey::create($data);
        if($survey){
            return redirect()->back()->with('success', __('general.Send Successfully'));
        }
   }

   public function joinUs(JoinUsRequest $request)
   {
        $data = $request->validated();
        if($request->hasFile('cv'))
        {
            $data['cv'] = storeFile($data['cv']);
        }
        $joinUsInfo = JoinUsInfo::create($data);

        if($joinUsInfo){
            return redirect()->back()->with('success', __('general.Send Successfully'));
        }
   }
}

