<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProjectCategory;

class Project extends Model
{
    use HasFactory;
    protected $fillables = [
        'project_category_id',
        'project_name',
        'project_photo',
        'project_description'
    ];

    // relationship
    public function project_category_r(){
      
        return $this->belongsTo(ProjectCategory::class,'project_category_id');
  }

  
}
