<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    protected $fillable = ['email', 'phone', 'first_name', 'last_name'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function pets()
    {
        return $this->belongsToMany(Pet::class);
    }

    public function losses()
    {
        return $this->hasMany(Loss::class);
    }

}