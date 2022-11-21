<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\PortfolioCat;

class PortfolioCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = PortfolioCat::where('status','1')->paginate(10);
        return view("admin.port_cat.index", compact("category"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view("admin.port_cat.add");
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

        $request->validate(["name" => "required"], [
            "name.required" => __("Category name is required")
        ]);

        $input = array_filter($request->all());

       

        $cat = new PortfolioCat();

        

        

        $cat->create($input);

        return back()->with("added", __("Category has been added !"));
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
        $data['category']=PortfolioCat::where('id',$id)->first();
        //dd($data['category']);

      return  view('admin.port_cat.edit',$data);
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

       

        $category = PortfolioCat::findOrFail($id);
        $input = array_filter($request->all());

        $input['name'] = $request->name;

       

        $category->update($input);

        return redirect()->route('portfolio-category.index')->with('updated', __('Category has been updated'));
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
        $newscat= PortfolioCat::find($id);

     
       
        $value = $newscat->delete();
        if ($value) {
            session()->flash("deleted", __(" Category has been deleted"));
            return redirect()->route('portfolio-category.index');
        }

    }
}
