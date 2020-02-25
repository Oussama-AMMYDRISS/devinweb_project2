<?php

namespace App\Http\Controllers;
use App\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    //


   
    public function index()
    {
        return Cities::all();
    }

    public function store(Request $request)
    {
        return Cities::create($request->all());
    }

    

    
}
