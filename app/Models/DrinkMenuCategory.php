<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DrinkMenu;

class DrinkMenuCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'drinkmenu_category_name',
        'drinkmenu_category_description'
    ];

    // relationship with drink menu
    public function drinkmenu_r(){
        // food menu category has many  drink menu items
        return $this->hasMany(DrinkMenu::class);
    }
}
