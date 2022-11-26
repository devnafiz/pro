<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\ImageManagerStatic as Image;
use App\Models\News;
use App\Models\News_cat;
use App\Models\Activity;

use Illuminate\Support\Str;
use Image;



class ActivityController extends Controller
{

    public function  __construct(){

        $this->middleware('auth:admin');
      }

    public function index(){

    	$data['all_news']=Activity::where(['status'=>'1'])->orderby('id','desc')->paginate(10);
        //dd($data['all_news']);

    	return view('admin.activity.index',$data);


    }




    public function addNews(){


      $data['news_cat']=News_cat::where(['status'=>'1'])->get();
      //cd dd($data['news_cat']);

      return view('admin.activity.news_add',$data);

    }
     public function store(Request $request){
       // dd($request->all());

        $request->validate([

            "heading" => "required|max:250", 

            'image' => 'required|max:2048'], 
            [

            "heading.required" => __("Slider heading is required"), 

        ]);

        $blog = new Activity;

        $input = array_filter($request->all());
        $input['heading']=$request->heading;

        $input['des'] = $request->des;
       // dd($input['des']);

       
        $input['cat_id'] = $request->cat_id;
        //$input['user'] = Auth::admin();

   

         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/activity/'.$name_gen);
        $save_url = 'backend/activity/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $blog->create($input);

        $notification = array(
            'message' => 'Activity  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('activity.all')->with($notification);



     }

     public function edit($id){

        $data['edit_data']=Activity::where('id',$id)->first();

        return view('admin.activity.news_edit',$data);


     }

     public function update(Request $request,$id){
           //dd($request->all());

        

       
       
     


        $news = Activity::findOrFail($id);
        $input = array_filter($request->all());

          if($request->file('image')!=Null){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/activity/'.$name_gen);
        $save_url = 'backend/activity/'.$name_gen;


       
       
        $input['image'] = $save_url;

         }

      
        $input['image'] = $request->image;

        $input['des'] = $request->des;
      
         $input['image'] = $save_url;
       
        $news->update($input);
        $notification = array(
            'message' => 'News  Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('activity.all')->with($notification);

        

       



          


     }


     public function delete($id){

         $news = Activity::find($id);

     
        if ($news->image != '' && file_exists(public_path() . '/backend/activity/' . $news->image)) {
            unlink(public_path() . '/backend/activity/' . $news->image);
        }

        $value = $news->delete();
        if ($value) {
            session()->flash("deleted", __("Activity has been deleted"));
            return redirect()->route('activity.all');
        }
     }
}
