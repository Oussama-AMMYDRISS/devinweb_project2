<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delivery_times;
use DB;
use Carbon\Carbon;


class DeliveryTimesController extends Controller
{
    //

    public function index()
    {
        return Delivery_times::all();
    }

    public function store(Request $request)
    {
        return Delivery_times::create($request->all());
    }

    public function attach(Request $request)
    {
        return Delivery_times::create($request->all());
    }


    public function days(Request $request)
    {
        $data[]=array();
        $datenow = Carbon::now();
        $day_name= $datenow->format('l');
        $date= $datenow->toDateString();
       
        $data = DB::table('cities_times')
                ->where('city_id', 'like', $request->city_id)
                ->get();

         $data2[]= array('dates'=>$day_name,$date,$data);       
                
        return response()->json($data2);
    }

}
