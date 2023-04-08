<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function sup_titles(){

        return $this->hasMany(SupTitle ::class);
    }

    public function sup_descriptions(){

        return $this->hasMany(SupDescription ::class);
    }

    public function steps(){

        return $this->hasMany(Step ::class);
    }
}
