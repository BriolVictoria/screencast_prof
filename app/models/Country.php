<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['code'];

    public function pet_owners()
    {
        return $this->hasMany(PetOwner::class);
    }

    public function losses()
    {
        return $this->hasMany(Loss::class);
    }

}
