<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties'; // Ez opcionális, ha a Laravel konvencióit követed

    protected $guarded = [
        'typePlanName'=>'string',
		'company_name'=>'string',
		'company_link'=>'string',
		'priceNet'=>'integer',
		'priceGross'=>'integer',
		'floorMap'=>'string', 
		'useFullArea'=>'integer', 
		'floors'=>'string', 
		'rooms'=>'string', 
		'bathrooms'=>'string', 
		'terraceSize'=>'integer',
		'innerHeight'=>'integer',
		'planType'=>'string',
		'accessibility'=>'string',
		'executionTime'=>'integer', 
		'levelOfPreparation'=>'string',
		'wallType'=>'string', 
		'foundation'=>'string', 
		'heatingType'=>'string', 
		'heatingEnergySupply'=>'string', 
		'coolingType'=>'string',
		'renewableEnergy'=>'string', 
		'energeticClassification'=>'string', 
		'priceAvailability'=>'string', 
		'property_thambnail'=>'string',
		'company_id'=>'integer', 
		'status'=>'string', 
		'short_description'=>'string', 
		'featured'=>'string', 
		'priceAvailable'=>'string',
		'telephone'=>'string', 
		'email'=>'string'
    ];

}