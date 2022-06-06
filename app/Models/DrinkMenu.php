<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DrinkMenuCategory;

class DrinkMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'drinkmenu_category_id',
        'drinkmenu_name',
        'drinkmenu_price',
        'drinkmenu_photo',
        'drinkmenu_description'
    ];

    public function drinkmenu_category_r(){

          // drinkmenu_category_id , foreign key
        //   drink menu category belongs to a food menu
          return $this->belongsTo(DrinkMenuCategory::class,'drinkmenu_category_id');
    }

}
