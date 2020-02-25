<?php

namespace App\Http\Controllers;
use App\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    //

    public function index()
    {
        return Partners::all();
    }

    public function store(Request $request)
    {
        return Partners::create($request->all());
    }
}
