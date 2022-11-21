<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Auth;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Models\News;
use App\Models\News_cat;
use Illuminate\Support\Str;
use Image;
use App\Models\Map;

class MapController extends Controller
{
     public function  __construct(){

        $this->middleware('auth:admin');
      }

    public function index(){

    	$data['all_map']=Map::where(['status'=>'1'])->paginate(10);
        //dd($data['all_news']);

    	return view('admin.map.index',$data);


    }




    public function addMap(){

           return view('admin.map.add_map');

        }
     

    public function store(Request $request){
        //dd($request->all());

        $request->validate([

            "name" => "required|max:190", 
            "link" => "required|max:3000", 

           ], 
            [

            "name.required" => __("Map Place heading is required"), 

        ]);
        //dd($request->all());
        $map = new Map;

        $input = array_filter($request->all());

        $input['name'] = $request->name;
        $input['link'] = $request->link;
          if( $request->file('image')){
         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/map/'.$name_gen);
        $save_url = 'backend/map/'.$name_gen;


       
       
        $input['image'] = $save_url;
        }
       
       // dd($input['des']);

       

        $input['status']=$request->status;
        $map->create($input);

        return redirect()->route('feature.all')->with("added", __("Map has been created !"));



     }

     public function edit($id){

        $data['edit_data']=Map::where('id',$id)->first();

        return view('admin.map.edit_map',$data);


     }

     public function update(Request $request,$id){

        $news = Map::findOrFail($id);
        $input = array_filter($request->all());

      
        $input['name'] = $request->name;
        $input['link'] = $request->link;
       
       // dd($input['des']);

        $input['status']=$request->status;
       // dd($input['des']);

        
        $news->update($input);

        return redirect()->route('feature.all')->with('updated', __('Map  has been updated !'));


     }


     public function delete($id){
        dd($id);

         $map = Map::find($id);

     
        
        $value = $map->delete();
        if ($value) {
            session()->flash("deleted", __("Map has been deleted"));
            return redirect()->route('feature.all');
        }
     }
}
