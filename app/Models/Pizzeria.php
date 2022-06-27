<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizzeria extends Model
{
    use HasFactory;

    /**
     * Get all of the pizzeria's addresses.
     */
    public function addresses()
    {
        return $this->morphMany(Addressable::class, 'addressable');
    }
}
