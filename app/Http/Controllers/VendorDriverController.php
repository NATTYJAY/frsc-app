<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Requests\vendorRequest;
use App\Category;
use App\Driver_Item;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Hash;



class VendorDriverController extends Controller
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
       
    }

  

    //  public function register_role(Request $data)
    // {
    //     $user_exist = User::where('email',$data->input('email'))
    //                                 ->get()->count();
    // if($user_exist){
    //      return redirect(url()->previous())->with('alert_item_reg2',"Vendor Already Registered");
    // }else{
    //      $return = User::create([
    //         'name' => $data['fname'] ." ".$data['lname'] ,
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'role_id'=>2,
    //     ]);

    //       if($return){
    //         return redirect(url()->previous())->with('success_item_msgs2',"Vendor Registered Successfully");
    //         }else{
    //             return redirect(url()->previous())->with('error_item_msgs2',"Vendor Could not be Registered");
    //         }
    // }
      
       
    // }



    public function assignRole()
    {
        return view('admin.userRoles.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
          $categories = Category::all();
        return view('vendors_layout.addItem.index')->with(['driver_id'=>$id,'categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item_exist = Driver_Item::where('driver_id',$request->input('driver_id'))
                                    ->where('item_id',$request->input('items'))
                                    ->get()->count();
      
    if($item_exist){
         return redirect(url()->previous())->with('alert_item_reg',"Item Already Added To this Driver. Renew Or Update Instead");
    }else{
        $driver_item = new Driver_Item;
        $driver_item->driver_id = $request->input('driver_id');
        $driver_item->item_id = $request->input('items');
        $driver_item->barcode = $request->input('barcode');
        $driver_item->serial_number = $request->input('serial_number');
        $driver_item->date_reg = $request->input('date_reg');
        $driver_item->item_expiry_date = $request->input('item_expiry_date');
            if($driver_item->save()){
            return redirect(url()->previous())->with('success_item_msgs',"Item Added to this Driver");
            }else{
                return redirect(url()->previous())->with('error_item_msgs',"Item Could not be added to this Driver");
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
}
