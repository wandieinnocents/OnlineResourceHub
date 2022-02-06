<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class GalleryCategory extends Model
{
    use HasFactory;
    protected $fillables = [
        'gallery_category_name',
        'gallery_category_description'

    ];

    // relationship with food menu
    public function gallery_r(){
        // gallery category has many  gallery menu items
        return $this->hasMany(Gallery::class);
    }
    

}
