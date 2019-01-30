<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_category;
use Illuminate\Http\Request;

use App\Category;

class VendorProductController extends Controller
{
    public function index()
    {
        return view('vendors_layout.index');
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
    public function store(request_category $request)
    {

         if(Category::create($request->all())){
              return redirect(url()->previous())->with('success',"Category was successfully Inserted");
         }else{
             return redirect(url()->previous())->with('error',"Category failed to Insert");
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
        $category = Category::all();

        return view('admin.category.edit',["cat"=>$category]);

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cat = Category::findOrFail($id);
         return response()->json(['data'=>$cat]);
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
        
           $category = Category::findOrFail($id);
            if($category->update($request->all())){
                return response()->json(['data'=>true]);
            }else{
                return response()->json(['data'=>false]);
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
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('deleted_user', 'Category has been deleted');
        if($category){
            return redirect('/category/'.$id);
        }
    }
}
