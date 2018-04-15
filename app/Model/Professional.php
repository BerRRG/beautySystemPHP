<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }
}