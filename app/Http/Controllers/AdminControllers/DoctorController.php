<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
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

        $doctors = Doctor::all();
        return view('dashboard.pages.doctors.index',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.doctors.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            "name_en"=>"required|string",
            "name_ar"=>"required|string",
            "description_en"=>'required',
            "description_ar"=>'required',
            "image"=>'required',
        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.doctors.create'), 'errors'=> $validator->errors()->all()]);

        }
       $requestAll = $validator->validated();
       if($request->hasFile('image'))
       {
           $requestAll['image'] = storeImage($requestAll['image'], '/uploads');
       }

       $doctor = Doctor::create($requestAll);

       if($doctor){
        return response()->json(['success' => true, 'redirect' => route('dashboard.doctors.index')]);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('dashboard.pages.doctors.edit',compact('doctor'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);

        $validator = Validator::make($request->all(),[
            "name_en"=>"required|string",
            "name_ar"=>"required|string",
            "description_en"=>'required',
            "description_ar"=>'required',
            "image"=>'nullable',
        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.services.create'), 'errors'=> $validator->errors()->all()]);

        }
       $requestAll = $validator->validated();
       if($request->hasFile('image'))
       {
           $requestAll['image'] = storeImage($requestAll['image'], '/uploads');
       }
       if($doctor->update($requestAll)){
        return response()->json(['success' => true, 'redirect' => route('dashboard.doctors.index')]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return response()->json(['success' => true, 'redirect' => route('dashboard.doctors.index')]);
    }
}
