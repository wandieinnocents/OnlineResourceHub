<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GalleryCategory;
class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'gallery_category_id',
        'gallery_name',
        'gallery_photo',
        'gallery_description'
    ];

    public function gallery_category_r(){
      
        return $this->belongsTo(GalleryCategory::class,'gallery_category_id');
  }

}
