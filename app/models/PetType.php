<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;

class PetType extends Model
{
    protected $fillable = ['code'];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

}