<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serviceman extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id' ,'id');
    }
}
