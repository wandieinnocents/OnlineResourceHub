<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resource;

class ResourceCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];

    // relationship
    public function resource_r(){
        return $this->hasMany(Resource::class);
    }

}
