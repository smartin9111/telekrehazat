<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class AllPropertyController extends Controller
{
     public function index(){

        $property = Property::all();
        return view('frontend.property.property_all',compact('property'));

    }// End Method 
}
