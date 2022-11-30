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

use Illuminate\Support\Str;
use Image;
use App\Models\Video;



class VideoController extends Controller
{

    public function  __construct(){

        $this->middleware('auth:admin');
      }

    public function index(){

    	$data['all_news']=Video::where(['status'=>'1'])->orderby('id','desc')->paginate(10);
        //dd($data['all_news']);

    	return view('admin.video.index',$data);


    }




    public function addNews(){


    
      //cd dd($data['news_cat']);

      return view('admin.video.news_add');

    }
     public function store(Request $request){
       // dd($request->all());

        $request->validate([

            "heading" => "required|max:250"], 

          
            [

            "heading.required" => __(" Heading is required")

        ]);

        $blog = new Video;

        $input = array_filter($request->all());
        $input['heading']=$request->heading;
        $input['post']=$request->post;

       
     
       
       
        $blog->create($input);

        $notification = array(
            'message' => 'video  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('video.all')->with($notification);



     }

     public function edit($id){

        $data['edit_data']=Video::where('id',$id)->first();

        return view('admin.video.news_edit',$data);


     }

     public function update(Request $request,$id){
           //dd($request->all());

      

        


        $news = Video::findOrFail($id);
        $input = array_filter($request->all());

        $input['heading']=$request->heading;
        $input['post']=$request->post;
       
       
        $news->update($input);
        $notification = array(
            'message' => 'Video  Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('video.all')->with($notification);

       


         


     }


     public function delete($id){

         $news = Video::find($id);

     
        $value = $news->delete();
        if ($value) {
            session()->flash("deleted", __("video has been deleted"));
            return redirect()->route('video.all');
        }
     }
}
