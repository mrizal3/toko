<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGaleri extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'product_galeries';
    
    protected $fillable = [

    	'product_id', 'photo','is_default'
    ];

    protected $hidden = [];


    public function Product()
    {
    	return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function getPhotoAttribute($value)
    {
    	return url('storage/' . $value);
    }
}
