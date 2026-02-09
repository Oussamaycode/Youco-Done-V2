<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    private $fillable=['url'];

    public function photable(){
        return $this->morphTo();
    }
}
