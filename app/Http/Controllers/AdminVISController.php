<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Driver;
use App\Driver_vehicle;
use Auth;
use App\Http\Requests\Driver_veh;
use App\Driver_Item;
use App\Category;


class AdminVISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $driver_item = DB::table('item')
            ->join('category', 'item.item_id', '=', 'category.id')
            ->join('driver', 'item.driver_id', '=', 'driver.id')
            ->select('item.*', 'category.name', 'driver.fname')
            ->where('item.driver_id','=', $id)
            ->get();
       $driver = Driver::findOrFail($id);
       $drivers = Driver::where('id','=', $id)->get()->pluck('license_expiry_date');
       $driver_veh = Driver_vehicle::where('id','=', $id)->get()->pluck('license_expiry_date');
       $expired = '';
       $today = date('Y-m-d'); 
        if($drivers->count()){
                if($today < $drivers){
                    $expired = 0; //not expired
                }else{
                    $expired = 1; // expired
                }
        }else{
             $expired = 4; // no driver registered
        }


         if($driver_veh->count()){
                if($today < $driver_veh){
                    $vexpired = 0; //not expired
                }else{
                    $vexpired = 1; // expired
                }
        }else{
             $vexpired = 4; // no driver registered
        }
         return view('admin.inspect.result.driver_inspect',compact('driver','expired','vexpired','driver_item'));
    }


    public function findCar(Request $request,$plate_number){

       $driver_with_number =  Driver::where('plate_number','=', $plate_number)->first();

       if ($driver_with_number) {
           return response()->json([
            "status"=> "success",
            "url" => route("inspect-car",$driver_with_number->id)
           ]);
       }else{

             return response()->json([
            "status"=> "failed"
           ], $status = 400);
       }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.inspect.result.driver_reg_vechicle')->with(['driver_id'=>$id]);
    }

    public function search(Request $request){
        if(!$request->has('query')){
            return view('admin.inspect.index');
        }else{
            $pn = Driver::where('plate_number', $request->input('query'))->get();
        return view('admin.inspect.result.inspectBoard')->with(['drivers_all'=>$pn,'query'=>$request->input('query')]);

        }
    }

    public function mobile(){
        return view('admin.inspect.wait');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Driver_veh $request)
    {
    
    $veh_exist = Driver_vehicle::select('driver_id')->where('driver_id',$request->input('driver_id'))->pluck('driver_id');
    if($veh_exist == $request->input('driver_id')){
         return redirect(url()->previous())->with('already_reg',"Driver Vehicle Already Registered. Please Update license Instead");
    }else{
        $driver_vehicle = new Driver_vehicle;
        $driver_vehicle->driver_id = $request->input('driver_id');
        $driver_vehicle->engine_capacity = strtoupper($request->input('engine_capacity'));
        $driver_vehicle->engine_number = $request->input('engine_number');
        $driver_vehicle->chasis_number = $request->input('chasis_number');
        $driver_vehicle->vehicle_make = strtoupper($request->input('vehicle_make'));
        $driver_vehicle->vehicle_color = strtoupper($request->input('vehicle_color'));
        $driver_vehicle->license_fee =  strtoupper($request->input('license_fee'));
        $driver_vehicle->license_date = $request->input('license_date');
        $driver_vehicle->license_expiry_date = $request->input('license_expiry_date');
            if($driver_vehicle->save()){
                 return redirect(url()->previous())->with('success_msgs',"Driver Vehicle was successfully Registerd");
            }else{
                return redirect(url()->previous())->with('error_msgs',"Driver Vehicle Registration failed");
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
        $category = Category::all();
         $driver_items = DB::table('item')
            ->join('category', 'item.item_id', '=', 'category.id')
            ->join('driver', 'item.driver_id', '=', 'driver.id')
            ->select('item.*', 'category.name', 'driver.fname')
            ->where('item.driver_id','=', $id)
            ->get();
        return view('admin.inspect.result.item_update')->with(['driver_items'=>$driver_items,'cat'=>$category]);
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
        //
        $driveritem = Driver_Item::findOrFail($id);
        $driveritem->delete();
        if($driveritem){
            return response()->json(['success'=>11]);
        }else{
             return response()->json(['success'=>12]);
        }
    }
}
