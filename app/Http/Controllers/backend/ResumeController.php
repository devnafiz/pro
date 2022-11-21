<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['all_data']=Resume::where('status','1')->paginate(10);
         return view('admin.resume.index',$data);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $resume = new Resume();


        $resume->cat_id =$request->cat_id;
        $resume->sub_cat_id =$request->sub_cat_id;
        $resume->heading =$request->heading;
        $resume->rating =$request->rating;
        $resume->des =$request->des;
        $resume->save();

        return redirect()->back()->with("added", __("Resume has been created !"));
           
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    //resume cat

    public function resumeCat1(Request $request){
        
       $data['all_cat']=DB::table('resume_cat')->get();

       return view('admin.resume.resume_cat',$data);

    }

    public function CreateResume($id){
        $data['id']=$id;
        $data['category']=DB::table('sub_head')->where('cat_id',$id)->get();
        return view('admin.resume.create',$data);


    }
}
