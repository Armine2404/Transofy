<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leadmarchant extends Model
{
    protected $guarded = [];

    public function reviews()
    {
        return $this-> hasMany(Review::class);
    }

    public function cupons()
    {
        return $this-> hasMany(Cupon::class);
    }
 
 
}
