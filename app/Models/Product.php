<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'Products';

    protected $fillable = [

    	'name','slug','type','description','price','quantity'
    ];

    protected $hidden = [


    ];

    public function galeri()
    {
        return $this->hasMany(ProductGaleri::class, 'product_id');
    	// return $this->hasMany(ProductGaleri::class, 'product_id');
    }
}
