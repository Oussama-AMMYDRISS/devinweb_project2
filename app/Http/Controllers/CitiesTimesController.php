<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities_times;
class CitiesTimesController extends Controller
{
    //

    public function index()
    {
        return Cities_times::all();
    }

    public function store(Request $request)
    {
        return Cities_times::create($request->all());
    }

    public function attach(Request $request)
    {
        return Cities_times::create($request->all());
    }


}
