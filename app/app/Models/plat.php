<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $fillable = [
        'nom',
        'prix',
        'menu_id',
        'typecuisine_id'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function typeCuisine()
    {
        return $this->belongsTo(TypeCuisine::class);
    }
}