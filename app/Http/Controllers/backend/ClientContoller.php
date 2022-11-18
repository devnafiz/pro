<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\ClientCat;
use Illuminate\Support\Str;
use Image;


class ClientContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all_client']=Client::where(['status'=>'1'])->orderby('id','desc')->paginate(10);
        //dd($data['all_news']);

        return view('admin.client.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data['client_cat']=ClientCat::where(['status'=>'1'])->get();
      

      return view('admin.client.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([

            "name" => "required|max:250", 

            'image' => 'required|max:2048'], 
            [

            "name.required" => __("Slider heading is required"), 

        ]);

        $blog = new Client;

        $input = array_filter($request->all());
        $input['name']=$request->name;

        //$input['des'] = $request->des;
       // dd($input['des']);

        //$input['slug'] = Str::slug($request->heading, '-');
        $input['cat_id'] = $request->cat_id;
        //$input['user'] = Auth::admin();

   

         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/client/'.$name_gen);
        $save_url = 'backend/client/'.$name_gen;


       
       
        $input['image'] = $save_url;
        $blog->create($input);

        $notification = array(
            'message' => 'Client  Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('Client.index')->with($notification);
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
         $data['edit_data']=Client::where('id',$id)->first();

        return view('admin.client.edit',$data);
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
       
       //$old_img = $request->old_image;

        if ($request->file('image')) {
       // if($old_img){
            //  unlink($old_img);
       // }
       
        //if(file_exists($request->file('image'))){
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('backend/client/'.$name_gen);
        $save_url = 'backend/client/'.$name_gen;
        //dd($save_url);
       
      //}
     


        $news = Client::findOrFail($id);
        $input = array_filter($request->all());

         //$input['image'] = $request->image;
       
        $input['image'] = $save_url;
       
         
       
        $news->update($input);
        $notification = array(
            'message' => 'News  Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('Client.index')->with($notification);

          }else{



        $news = Client::findOrFail($id);
        $input = array_filter($request->all());

      
        $input['image'] = $request->image;

       
    
       
        

        $news->update($input);
        $notification = array(
            'message' => 'News  Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('Client.index')->with($notification);



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

         $news = Client::find($id);

     
        if ($news->image != '' && file_exists(public_path() . '/backend/client/' . $news->image)) {
            unlink(public_path() . '/backend/client/' . $news->image);
        }

        $value = $news->delete();
        if ($value) {
            session()->flash("deleted", __("Client has been deleted"));
            return redirect()->route('Client.index');
        }
     }
}
