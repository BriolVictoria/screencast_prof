<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;

class Loss extends Model
{
    protected $fillable = ['lost_at', 'postal_code', 'country_id', 'pet_id', 'pet_owner_id'];

    public function countries ()
    {
        return $this->belongsTo(Country::class);
    }

    public function pets ()
    {
        return $this->belongsTo(Pet::class);
    }

    public function pet_owners ()
    {
        return $this->belongsTo(PetOwner::class);
    }

}