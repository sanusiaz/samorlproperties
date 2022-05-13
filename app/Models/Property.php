<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Category;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
    	'name',
    	'description',
    	'type',
    	'price',
    	'views', 
    	'plan',
        'file_name',
        'purpose',
        'city_id',
        'category_id',
        'email',
        'phone',
        'state',
        'town',
        'location',
        'size'
    ];

    public function scopeRelatedAds($query, $id)
    {
        return $query->where('id', '!=', $id)->orWhereNull('id')->limit(4)->get();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
    
}
