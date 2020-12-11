<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function propertyFeature()
    {
        return $this->hasOne(PropertyFeature::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function propertyImage()
    {
        return $this->hasMany(PropertyImage::class);
    }

}