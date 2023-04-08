<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory ,SoftDeletes;

    public function country(){

        return $this->belongsTo(Country::class);
    }

    public function hospitals(){

        return $this->hasMany(Hospital ::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
