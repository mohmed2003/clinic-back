<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory ,SoftDeletes;

    public function spachilty(){
        return $this->belongsTo(Spachilty::class);
    }

    public function user(){
        return $this->morphOne(User::class , 'actor' , 'actor_type' , 'actor_id' , 'id');
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($doctor) {
            $doctor->user()->delete();

        });
    }
}
