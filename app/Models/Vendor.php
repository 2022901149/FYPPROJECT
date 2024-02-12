<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'vendorName',  
        'businessName',  
        'businessType',  
        'services',
        'serviceDescription', 
        'price', 
        'phone',
        'address',
        'additionalInfo',  
    ];

    protected $table = 'vendors';
}
