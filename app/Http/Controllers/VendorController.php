<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Http\Requests\driverAddProduct;
use App\Category;
use App\Driver;
use App\Driver_Item;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        //
        $category =  Category::where('admins_id',auth()->user('admin')->id)->orderBy('created_at','desc')->get();
        $driver_id = Driver::all();
    return view('vendors_layout.addItem.index')->with(['category'=> $category,'drivers'=>$driver_id]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
        return view('vendors_layout.addItem.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(driverAddProduct $request)
    {
        //
        $item_exist = Driver_Item::where('driver_id',$request->input('driver_id'))
                                    ->where('item_id',$request->input('item_id'))
                                    ->get()->count();
        if($item_exist){
            return redirect(url()->previous())->with('alert_item_reg',"Product Already Added To this Driver. Renew Or Update Instead");
        }else{
        $driver_item = new Driver_Item;
        $driver_item->driver_id = $request->input('driver_id');
        $driver_item->item_id = $request->input('item_id');
        $driver_item->barcode = $request->input('barcode');
        $driver_item->serial_number = $request->input('serial_number');
        $driver_item->date_reg = $request->input('date_reg');
        $driver_item->item_expiry_date = $request->input('item_expiry_date');
                if($driver_item->save()){
                return redirect(url()->previous())->with('success_item_msgs',"Product Added to this Driver");
                }else{
                    return redirect(url()->previous())->with('error_item_msgs',"Product Could not be added to this Driver");
                }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
         $category = Category::all();
         $driver_items = DB::table('item')
            ->join('category', 'item.item_id', '=', 'category.id')
            ->join('driver', 'item.driver_id', '=', 'driver.id')
            ->select('item.*', 'category.name', 'driver.fname','driver.lname','category.image_path')
            ->where('category.admins_id','=', auth()->user('admin')->id)
            ->get();
        return view('vendors_layout.addItem.item_update')->with(['driver_items'=>$driver_items,'cat'=>$category]);
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
         $item_id = Driver_Item::findOrFail($id);
         return response()->json(['data'=>$item_id]);
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
        $drivers_it = Driver_Item::findOrFail($id);
            if($drivers_it->update($request->all())){
                 return response()->json(['success'=>11]);
            }else{
                return response()->json(['success'=>12]);
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
        $driveritem = Driver_Item::findOrFail($id);
        $driveritem->delete();
        if($driveritem){
            return response()->json(['success'=>11]);
        }else{
             return response()->json(['success'=>12]);
        }
    }

     public function count_product(){
        $counted = DB::table('category')
                ->where('admins_id', auth()->user('admin')->id)
                ->count();
                return $counted;
    }

    public function driver_with_product(){
         $counted = DB::table('item')
            ->join('category', 'item.item_id', '=', 'category.id')
            ->join('driver', 'item.driver_id', '=', 'driver.id')
            ->select('item.*')
            ->where('category.admins_id','=', auth()->user('admin')->id)
            ->count();
                return $counted;
    }
}
