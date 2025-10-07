<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model  
{
    use HasFactory;
    
    protected $fillable = [
        'name',          
        'description',    
        'price',          
        'stock',          
        'is_available',  
        'category_id', 
        'barcode',  
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}