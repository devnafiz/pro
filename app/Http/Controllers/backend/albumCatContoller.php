<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlbumCat;
use App\Models\Album;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;


class albumCatContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['album_cat']=AlbumCat::where('status','1')->paginate(10);
        return view('admin.album-cat.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.album-cat.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
      $request->validate(["name" => "required"], [
            "name.required" => __("Category name is required")
        ]);

        $input = array_filter($request->all());

       

        $cat = new AlbumCat();
        $input['name'] = $request->name;

         $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/album-cat/'.$name_gen);
        $save_url = 'backend/album-cat/'.$name_gen;


       
       
        $input['image'] = $save_url;

        $cat->create($input);

        return back()->with("added", __("Album Name has been added !"));
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
        $data['category']=AlbumCat::where('id',$id)->first();
        //dd($data['category']);

      return  view('admin.album-cat.edit',$data);
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
          $request->validate( 
            [
                "name" => "required"
            ],[
                "name.required" => __("Name is required !")
            ]
        );

       

        $category = AlbumCat::findOrFail($id);
        $input = array_filter($request->all());

        $input['name'] = $request->name;
        

         if($request->file('image')!=Null){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1200,500)->save('backend/album-cat/'.$name_gen);
        $save_url = 'backend/album-cat/'.$name_gen;


       
       
        $input['image'] = $save_url;

         }
        $input['status'] = $request->status;

       

        $category->update($input);

        return redirect()->route('album-category.index')->with('updated', __('Category has been updated'));
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

    public function delete(){


    }
}
