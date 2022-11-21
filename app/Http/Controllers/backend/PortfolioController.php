<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\PortfolioCat;

use Illuminate\Support\Str;
use Image;


class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_data']=Portfolio::where(['status'=>'1'])->orderby('id','desc')->paginate(10);
        //dd($data['all_news']);

        return view('admin.portfolio.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['port_cat']=PortfolioCat::where(['status'=>'1'])->get();
      //cd dd($data['news_cat']);

      return view('admin.portfolio.add',$data);
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
        $request->validate([

            "heading" => "required|max:250", 

            'image' => 'required|max:2048'], 
            [

            "heading.required" => __("Slider heading is required"), 

        ]);

        $data = new Portfolio;

        $input = array_filter($request->all());
        $input['heading']=$request->heading;

        $input['des'] = $request->des;
        $input['cat_id'] = $request->cat_id;
       // dd($input['des']);

       
       
        //$input['user'] = Auth::admin();

   

         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/portfolio/'.$name_gen);
        $save_url = 'backend/portfolio/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $data->create($input);

        $notification = array(
            'message' => 'Portfolio  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('portfolio.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data['port_cat']=PortfolioCat::where(['status'=>'1'])->get();
         $data['edit_data']=Portfolio::where('id',$id)->first();

        return view('admin.portfolio.edit',$data);
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
       //dd($request->all());
        if ($request->file('image')) {
       // if($old_img){
            //  unlink($old_img);
       // }
       
        //if(file_exists($request->file('image'))){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/portfolio/'.$name_gen);
        $save_url = 'backend/client/'.$name_gen;
        //dd($save_url);
       
      //}
     


        $news = Portfolio::findOrFail($id);
        $input = array_filter($request->all());

         //$input['image'] = $request->image;
       
        $input['image'] = $save_url;
        $input['heading']=$request->heading;

        $input['des'] = $request->des;
        $input['cat_id'] = $request->cat_id;
       
         
       
        $news->update($input);
        $notification = array(
            'message' => 'Portfolio  Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('portfolio.index')->with($notification);

          }else{



        $news = Portfolio::findOrFail($id);
        $input = array_filter($request->all());

      
        $input['image'] = $request->old_image;
        $input['heading']=$request->heading;

        $input['des'] = $request->des;
        $input['cat_id'] = $request->cat_id;

       
    
       
        

        $news->update($input);
        $notification = array(
            'message' => 'Portfolio  Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('portfolio.index')->with($notification);



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
        //
    }


     public function delete($id){

         $news = Portfolio::find($id);

     
        if ($news->image != '' && file_exists(public_path() . '/backend/portfolio/' . $news->image)) {
            unlink(public_path() . '/backend/portfolio/' . $news->image);
        }

        $value = $news->delete();
        if ($value) {
            session()->flash("deleted", __("Portfolio has been deleted"));
            return redirect()->route('portfolio.index');
        }
     }
}
