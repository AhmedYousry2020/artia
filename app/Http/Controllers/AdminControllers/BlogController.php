<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lang = Session::get('lang','en');
        app()->setLocale($lang);

        $blogs = Blog::all();
        return view('dashboard.pages.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.blogs.create');
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
            "title_en"=>"required|string",
            "body_en"=>'required',
            "title_ar"=>"required|string",
            "body_ar"=>'required',
            "image"=>'required',
        ]);
        if($validator->fails()){

            return response()->json(['success' => false, 'redirect' =>  route('dashboard.blogs.create'), 'errors'=> $validator->errors()->all(),'data'=>$request->all()]);

        }
       $requestAll = $validator->validated();
        if($request->hasFile('image'))
        {
            $requestAll['image'] = storeImage($requestAll['image'], '/uploads');
        }

       $Blog = Blog::create($requestAll);

       if($Blog){
        return response()->json(['success' => true, 'redirect' => route('dashboard.blogs.index')]);
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
        $blog = Blog::findOrFail($id);
        return view('dashboard.pages.blogs.edit',compact('blog'));

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
        $blog = Blog::findOrFail($id);

        $validator = Validator::make($request->all(),[
             "title_en"=>"required|string",
            "body_en"=>'required',
            "title_ar"=>"required|string",
            "body_ar"=>'required',
            "image"=>'nullable',
        ]);
        if($validator->fails()){
            return response()->json(['success' => false, 'redirect' =>  route('dashboard.blogs.create'), 'errors'=> $validator->errors()->all()]);
        }
        $requestAll = $validator->validated();
        if($request->hasFile('image'))
        {
            $requestAll['image'] = storeImage($requestAll['image'], '/uploads');
        }
       if($blog->update($requestAll)){
        return response()->json(['success' => true, 'redirect' => route('dashboard.blogs.index')]);
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
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return response()->json(['success' => true, 'redirect' => route('dashboard.blogs.index')]);
    }
}
