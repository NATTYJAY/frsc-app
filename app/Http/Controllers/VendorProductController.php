<?php

namespace App\Http\Controllers;

use App\Http\Requests\request_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

use App\Category;

class VendorProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
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
        $category = new Category();
            if($file = $request->file('image_path')){
                    $name = time().$file->getClientOriginalName();
                    $file->move('product_image',$name);
                    $category->admins_id = $request->user('admin')->id;
                    $category->name = $request->input('name');
                    $category->description  = $request->input('description');
                    $category->image_path =$request->input('image_path');
                    $category->image_path =  $name;
                        if($category->save()){
                            return redirect(url()->previous())->with('success',"Product was successfully Inserted");
                        }else{
                           return redirect(url()->previous())->with('error',"Product failed to Insert");
                        }
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
         $driver_ = DB::table('item')
            ->join('category', 'item.item_id', '=', 'category.id')
            ->join('driver', 'item.driver_id', '=', 'driver.id')
            ->select('item.*', 'category.*', 'driver.fname','driver.lname')
            ->where('category.admins_id','=', auth()->user('admin')->id)
            ->get();

        return view('vendors_layout.edit',["cat"=>$driver_]);

        
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
        Session::flash('deleted_user', 'Product has been deleted');
        if($category){
            return redirect('/product/'.$id);
        }
    }
}
