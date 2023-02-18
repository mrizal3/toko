<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
		'transaction_id','product_id' 
    ];
    protected $hidden = [];


    public function Transaction()
    {
    	return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
    public function Product()
    {
    	return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
