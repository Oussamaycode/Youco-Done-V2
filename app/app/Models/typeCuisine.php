<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeCuisine extends Model
{
    use HasFactory;

    protected $table = 'typecuisines';

    protected $fillable = [
        'nom',
        'description',
    ];

        public function plats()
    {
        return $this->hasMany(Plat::class);
    }



}
