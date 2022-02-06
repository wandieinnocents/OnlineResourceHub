<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceCategory;

class Service extends Model
{
    use HasFactory;
    protected $fillables = [
        'service_category_id',
        'service_name',
        'service_photo',
        'service_description'

    ];

    // relationship
    public function service_category_r(){
      
        return $this->belongsTo(ServiceCategory::class,'service_category_id');
  }
}
