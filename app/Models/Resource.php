<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    // fillables


    public function resource_category_r(){

        // category , foreign key
        return $this->belongsTo(ResourceCategory::class,'resource_category_id');
  }
  

}
