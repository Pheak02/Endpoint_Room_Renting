<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'home_id'];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}

