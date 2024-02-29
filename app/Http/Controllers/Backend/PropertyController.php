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
            'useFullArea' => $request->useFullArea,
            'floors' => $request->floors,
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
            'company_name' => $request->company_name,
            'company_link' => $request->company_link,
            'short_description' => $request->short_description,
            'property_thambnail' => $save_url,
        ]);

        $saveResult = $property->save();

        if ($saveResult) {
            return redirect('/all/property')->with('success', 'Adat sikeresen mentve!');
        } else {
            // Sikertelen mentés esetén visszatérés az előző oldalra hibaüzenettel
            return back()->with('error', 'Hiba történt az adatok mentése közben.');
        }
    }

    // End Method
}
