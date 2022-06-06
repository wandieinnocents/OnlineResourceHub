<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FoodMenu;

class FoodMenuCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'foodmenu_category_name',
        'foodmenu_category_description'
    ];

    // relationship with food menu
    public function foodmenu_r(){
        // food menu category has many  food menu items
        return $this->hasMany(FoodMenu::class);
    }
    
}
