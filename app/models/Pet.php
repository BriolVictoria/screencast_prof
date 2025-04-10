<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = ['name', 'chip', 'gender', 'age', 'race', 'tatoo', 'description', 'photo_path', 'pet_type_id'];

    public function pet_types ()
    {
        return $this->belongsTo(PetType::class);
    }

    public function pet_owners()
    {
        return $this->belongsToMany(PetOwner::class);
    }

    public function losses()
    {
        return $this->hasMany(Loss::class);
    }

}