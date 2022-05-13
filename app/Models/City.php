<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
    	'city_name',
    	'country',
    	'file_name',
    	'state'
    ];

    public function property() {
        return $this->hasMany(Property::class);
    }
}
