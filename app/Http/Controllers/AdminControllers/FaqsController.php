<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FaqsController extends Controller
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

        $faqs = Faqs::all();
        return view('dashboard.pages.faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.faqs.create');

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
            "question_en"=>"required|string",
            "answer_en"=>'required',
            "question_ar"=>"required|string",
            "answer_ar"=>'required',

        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.faqs.create'), 'errors'=> $validator->errors()->all()]);

        }
       $requestAll = $validator->validated();

       $Faqs = Faqs::create($requestAll);

       if($Faqs){
        return response()->json(['success' => true, 'redirect' => route('dashboard.faqs.index')]);
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
        $faqs = Faqs::findOrFail($id);
        return view('dashboard.pages.faqs.edit',compact('faqs'));

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
        $faqs = Faqs::findOrFail($id);

        $validator = Validator::make($request->all(),[
            "question_en"=>"required|string",
            "answer_en"=>'required',
            "question_ar"=>"required|string",
            "answer_ar"=>'required',
        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.fas.create'), 'errors'=> $validator->errors()->all()]);

        }
       $requestAll = $validator->validated();

       if($faqs->update($requestAll)){
        return response()->json(['success' => true, 'redirect' => route('dashboard.faqs.index')]);
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
        $faqs = Faqs::findOrFail($id);
        $faqs->delete();
        return response()->json(['success' => true, 'redirect' => route('dashboard.faqs.index')]);

    }
}
