<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MultiImage;
use App\Models\Property;
use Carbon\Carbon;
use Exception;
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
            'featured' => $request->featured,
            'priceAvailable' => $request->priceAvailable,
            'telephone' => $request->telephone,
            'email' => $request->email,
			'created_at' => now(),
			'updated_at' => now()
		]);
		if (!$property_id) {
			throw new Exception('Failed to insert property details');
		}

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
		$notification = array(
			'message' => 'Property Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->route('all.property')->with($notification);
	}
	// End Method

	public function EditProperty($id)
	{
		$property = Property::findOrFail($id);
		$multiImage = MultiImage::where('property_id',$id)->get();
		return view('backend.property.edit_property', compact('property','multiImage'));
	} // End Method 


	public function UpdateProperty(Request $request){
		$property_id = $request->id;

        Property::findOrFail($property_id)->update([
			'typePlanName' => $request->typePlanName,
			'priceNet' => $request->priceNet,
			'priceGross' => $request->priceGross,
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
            'featured' => $request->featured,
 			'priceAvailable' => $request->priceAvailable,
            'telephone' => $request->telephone,
            'email' => $request->email,
			'created_at' => now(),
			'updated_at' => now()

		]);

	 	$notification = array(
            'message' => 'Property Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.property')->with($notification); 
	} // End Method 

	public function UpdatePropertyThambnail(Request $request){

			$pro_id = $request->id;
			$oldImage = $request->old_img;

			$image = $request->file('property_thambnail');
			$manager = new ImageManager(new Driver());
			$name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
			$img = $manager->read($request->file('property_thambnail'));
			$img = $img->resize(370, 250);
			$img->save('upload/property/thambnail/' . $name_gen);
			$save_url = 'upload/property/thambnail/' . $name_gen;

			if (file_exists($oldImage)) {
				unlink($oldImage);
			}

			Property::findOrFail($pro_id)->update([

				'property_thambnail' => $save_url,
				'updated_at' => Carbon::now(), 
			]);

			$notification = array(
				'message' => 'Property Image Thambnail Updated Successfully',
				'alert-type' => 'success'
			);

			return redirect()->back()->with($notification); 

		}// End Method 

  public function UpdatePropertyMultiimage(Request $request){

        $imgs = $request->multi_img;
		$manager = new ImageManager(new Driver());

        foreach($imgs as $id => $img){
           	$make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
			$uploadPath = 'upload/property/multi-image/' . $make_name;

			$img = $manager->read($img);
			$img->resizeDown(770, 520)->save(public_path($uploadPath));
        	$uploadPath = 'upload/property/multi-image/'.$make_name;

			MultiImage::where('id',$id)->update([

				'photo_name' => $uploadPath,
				'updated_at' => Carbon::now(),

			]);
        } // End Foreach 


         $notification = array(
            'message' => 'Property Multi Image Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method 


	public function PropertyMultiImageDelete($id){

			$oldImg = MultiImage::findOrFail($id);
			unlink($oldImg->photo_name);

			MultiImage::findOrFail($id)->delete();

			$notification = array(
				'message' => 'Property Multi Image Deleted Successfully',
				'alert-type' => 'success'
			);

			return redirect()->back()->with($notification); 

		}// End Method 

		public function StoreNewMultiimage(Request $request){

				$new_multi = $request->imageid;
				$image = $request->file('multi_img');
				$manager = new ImageManager(new Driver());
     			$make_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        		$uploadPath = 'upload/property/multi-image/'.$make_name;

				$img = $manager->read($image);
				$img->resizeDown(770, 520)->save(public_path($uploadPath));

				MultiImage::insert([
					'property_id' => $new_multi,
					'photo_name' => $uploadPath,
					'created_at' => Carbon::now(), 
				]);

			$notification = array(
					'message' => 'Property Multi Image Added Successfully',
					'alert-type' => 'success'
				);

				return redirect()->back()->with($notification); 
		}// End Method 

		public function DeleteProperty($id){

				$property = Property::findOrFail($id);
				unlink($property->property_thambnail);

				Property::findOrFail($id)->delete();

				$image = MultiImage::where('property_id',$id)->get();

				foreach($image as $img){
					unlink($img->photo_name);
					MultiImage::where('property_id',$id)->delete();
				}

				$notification = array(
					'message' => 'Property Deleted Successfully',
					'alert-type' => 'success'
				);

				return redirect()->back()->with($notification); 

			}// End Method  
}