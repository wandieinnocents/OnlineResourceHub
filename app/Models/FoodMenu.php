<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FoodMenuCategory;

class FoodMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'foodmenu_category_id',
        'foodmenu_name',
        'foodmenu_price',
        'foodmenu_photo',
        'foodmenu_description'
    ];

    public function foodmenu_category_r(){

          // foodmenu_category_id , foreign key
        //   food menu category belongs to a food menu
          return $this->belongsTo(FoodMenuCategory::class,'foodmenu_category_id');
    }
    
}
