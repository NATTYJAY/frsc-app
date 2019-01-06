<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Driver_validate;
use App\Driver;
use Illuminate\Support\Facades\DB;

class AdminDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('admin.drivers.index');
        $driver = DB::table('driver')
                ->latest()
                ->limit(5)
                ->get();
        return view('admin.index',compact('driver'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function total_driver(){
        $counted = DB::table('driver')
                ->count();
                return $counted;
    }

     public function total_vehicle(){
        $counted = DB::table('vehicle_reg')
                ->count();
                return $counted;
    }

    public function total_users(){
        $counted = DB::table('users')
                ->count();
                return $counted;
    }

     public function total_item(){
        $counted = DB::table('item')
                ->count();
                return $counted;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Driver_validate $request)
    {
                $driver = new Driver;
                if($file = $request->file('image_path')){
                    $name = time().$file->getClientOriginalName();
                    $file->move('imagess',$name);
                    $driver->fname = strtoupper($request->fname);
                    $driver->lname = strtoupper($request->lname);
                    $driver->height = strtoupper($request->height);
                    $driver->dob = $request->dob;
                    $driver->nok = $request->nok;
                    $driver->gender = strtoupper($request->gender);
                    $driver->address = ucfirst($request->address);
                    $driver->license_issue_date = $request->license_issue_date;
                    $driver->license_expiry_date = $request->license_expiry_date;
                    $driver->image_path =  $name;
                    $driver->plate_number = 'PLT'.$this->getRandomUserName()."-NGR";
                        if($driver->save()){
                             return redirect(url()->previous())->with('success_msg',"Driver was successfully Added");
                        }else{
                            return redirect(url()->previous())->with('error_msg',"Driver Registration failed");
                        }
                }else{
                   return redirect(url()->previous())->with('img_error',"There's an issue with image");
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
        $driver = Driver::orderBy('id', 'DESC')->get();
        return view('admin.drivers.index',["driver"=>$driver]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drivers = Driver::findOrFail($id);
         // $respond = response()->json(['data'=>$drivers]);
        return view('admin.drivers.edit',compact('drivers'));
        //return response()->json(['data'=>$driver]);
         
    }

    public function showDriverModal($driver_id){
           $driver = Driver::findOrFail($driver_id);
         return response()->json(['data'=>$driver]);
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, $id)
    {
        return response()->json(['success'=>$request->ok]);
            // if($file = $request->file('image_path')){
            //         $name = time().$file->getClientOriginalName();
            //         $file->move('imagess',$name);
            //         $drivers_ = Driver::findOrFail($id);
            //         $insert = $request->all();
            //         $insert['image_path'] = $name;
            //         if($drivers_->update($insert)){
            //             return response()->json(['success'=>true]);
            //         }else{
            //             return response()->json(['success'=>false]);
            //         }
            // }else{
            //     return response()->json(['success'=>falsei]);
            // }
        
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

     protected function getRandomUserName($len = 5) {
            $word = array_merge(range('0', '9'), range('A', 'Z'));
            shuffle($word);
            return substr(implode($word), 0, $len);
    }
}
