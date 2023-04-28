<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use HasFactory ,SoftDeletes;

    const DEFAULT_IMAGE = 'storage/images/doctor/person.png';

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

    public function getFullNameAttribute(){
        return $this->user->f_name ."".$this->user->l_name;
    }

    protected static function bootImage()
    {
        parent::boot();

        static::creating(function ($user) {
            // Set default image if image is not provided
            if (empty($user->image)) {
                $user->image = self::DEFAULT_IMAGE;
            }
        });
    }
}
