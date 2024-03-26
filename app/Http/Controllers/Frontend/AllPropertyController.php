<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class AllPropertyController extends Controller
{
     public function index(){

        $property = Property::paginate(8);
        return view('frontend.property.property_all',compact('property'));

    }// End Method 
 
	public function searchAndFilter(Request $request)
	{

		$query = Property::query(); // Így kezdődik a lekérdezés építése

		if ($request->filled('rooms') && $request->rooms !== 'Szobák száma') {
			$query->where('rooms', '=', $request->rooms);
		}
	
		if ($request->filled('bathrooms') && $request->bathrooms != 'Fürdőszobák száma') {
			$query = $query->where('bathrooms', '=', $request->bathrooms);
		}
		
		if ($request->filled('levelOfPreparation')&& $request->levelOfPreparation != 'Készültségi szint') {
			
			$query = $query->where('levelOfPreparation', '=', $request->levelOfPreparation);
		}

		if ($request->filled('propertyAmount')) {
			$priceRange = $request->propertyAmount; 
			
			list($minPrice, $maxPrice) = explode(' - ', $priceRange);
			$minPrice = (int)str_replace('$', '', $minPrice);
			$maxPrice = (int)str_replace('$', '', $maxPrice);
			$query->whereBetween('priceGross', [(int) $minPrice, (int) $maxPrice]);
		}

		if ($request->filled('useFullArea')) {
			$areaRange = $request->useFullArea; 
			
			list($minArea, $maxArea) = explode(' - ', $areaRange);
			$minArea = (int)str_replace('m2', '', $minArea);
			$maxArea = (int)str_replace('m2', '', $maxArea);
			$query->whereBetween('useFullArea', [(int) $minArea, (int) $maxArea]);
		}


		if ($request->filled('priceGross') && in_array($request->priceGross, ['asc', 'desc'])) {
			$query->orderBy('priceGross', $request->priceGross);

		} else {
			$query->orderBy('priceGross', 'asc');
		}
 
		
    	$property = $query->paginate(10);


 		return view('frontend.property.property_search',compact('property'));
	}

}
