<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Property;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PropertyController extends Controller
{
    public function AllProperty()
    {
        $property = Property::latest()->get();
        return view('backend.property.all_property', compact('property'));
    } // End Method

    public function AddProperty()
    {
        return view('backend.property.add_property');
    } // End Method

    public function StoreProperty(Request $request)
    {


        // dd($request->file('property_thambnail'));
        //$pcode = IdGenerator::generate(['table' => 'properties', 'field' => 'property_code', 'length' => 5, 'prefix' => 'PC']);


        $image = $request->file('property_thambnail');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        // Image::make($image)->resize(370, 250)->save('upload/property/thambnail/' . $name_gen);


        $save_url = 'upload/property/thambnail/' . $name_gen;

        $property = new Property([

            'typePlanName' => $request->typePlanName,
            'priceNet' => $request->priceNet,
            'priceGross' => $request->priceGross,
            'property_thambnail' => $save_url,
            'floorMap' => $request->floorMap,
            'useFullArea' => $request->floors,
            'rooms' => $request->rooms,
            'bathrooms' => $request->bathrooms,
            'terraceSize' => $request->terraceSize,
            'innerHeight' => $request->innerHeight,
            'planType' => $request->planType,
            'accessibility' => $request->accessibility,
            'executionTime' => $request->executionTime,
            'levelOfPreparation' => $request->levelOfPreparation,
            'wallType' => $request->wallType,
            'foundation' => $request->foundation,
            'heatingType' => $request->heatingType,
            'heatingEnergySupply' => $request->heatingEnergySupply,
            'coolingType' => $request->coolingType,
            'renewableEnergy' => $request->renewableEnergy,
            'energeticClassification' => $request->energeticClassification,
            'partnerName' => $request->partnerName,
            'short_description' => $request->short_description,

            'lowest_price' => $request->lowest_price,
            'max_price' => $request->max_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garage' => $request->garage,
            'garage_size' => $request->garage_size,

            'property_size' => $request->property_size,
            'property_video' => $request->property_video,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,

            'neighborhood' => $request->neighborhood,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'featured' => $request->featured,
            'hot' => $request->hot,
            'agent_id' => $request->agent_id,
            'status' => 1,
            'property_thambnail' => $save_url,
        ]);
        dd($property);
    } // End Method
}