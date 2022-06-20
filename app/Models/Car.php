<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    public function model()
    {
        return $this->belongsTo(Modele::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
}
