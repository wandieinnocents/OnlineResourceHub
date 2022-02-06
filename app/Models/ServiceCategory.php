<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $fillables = [
        'service_category_name',
        'service_category_description'

    ];
    // relationship
    public function serivice_r(){
        return $this->hasMany(Service::class);
    }
}
