<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];
    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function leadmarchant()
    {
       return $this->belongsTo(Leadmarchant::class);
    }
}
