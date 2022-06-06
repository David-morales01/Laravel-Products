<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    
    protected $guarded=[];
    use HasFactory;


    public function product() {
        return $this->belongsTo(Product::class);
    }
    
    public function seller() {
        return $this->belongsTo(Seller::class);
    }
    
    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
