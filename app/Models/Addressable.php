<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addressable extends Model
{
    use HasFactory;

    public function addressable()
    {
        return $this->morphTo();    
    }
}
