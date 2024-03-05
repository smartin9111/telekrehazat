<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use App\Models\Property;
use Carbon\Carbon;
use Exception;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

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
		$image = $request->file('property_thambnail');
		//$pcode = IdGenerator::generate(['table' => 'properties', 'field' => 'property_code', 'length' => 5, 'prefix' => 'PC']);
		$manager = new ImageManager(new Driver());
		$name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
		$img = $manager->read($request->file('property_thambnail'));
		$img = $img->resize(370, 250);
		$img->save('upload/property/thambnail/' . $name_gen);
		$save_url = 'upload/property/thambnail/' . $name_gen;

		$property_id = Property::insertGetId([

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
			'created_at' => now(), 
			'updated_at' => now()
		]);
  if (!$property_id) {
        throw new Exception('Failed to insert property details');
    }

		/* 

        if ($saveResult) {
            return redirect('/all/property')->with('success', 'Adat sikeresen mentve!');
        } else {
            // Sikertelen mentés esetén visszatérés az előző oldalra hibaüzenettel
            return back()->with('error', 'Hiba történt az adatok mentése közben.');
        }
*/
		$multiImage = new MultiImage;
		$images = $request->file('multi_img');
		foreach ($images as $image) {
			$imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
			$uploadPath = 'upload/property/multi-image/' . $imageName;

			$img = $manager->read($image);
			$img->resizeDown(770, 520)->save(public_path($uploadPath));
			MultiImage::insert([
				['property_id' => $property_id, 'photo_name' => $uploadPath, 'created_at' => now(), 'updated_at' => now()],

			]);
		}
 return redirect('/all/property')->with('success', 'Adat sikeresen mentve!');
	}

	// End Method
}
