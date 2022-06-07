<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getCatType()
    {
        $params = explode('/', url()->current());
        $getCatTypeFromLastParam = $params[count($params) - 1];
        return $getCatTypeFromLastParam == 'queens' ? 'queen' : 'king';
    }

    public function litters()
    {
        return $this->hasMany(Litter::class);
    }
}
