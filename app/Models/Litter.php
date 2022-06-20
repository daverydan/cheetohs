<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Litter extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mom()
    {
        return $this->hasMany(Cat::class, 'id', 'mom_id');
    }

    public function dad()
    {
        return $this->hasMany(Cat::class, 'id', 'dad_id');
    }
}
