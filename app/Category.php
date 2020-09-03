<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\In;

class Category extends Model
{
    public function ingredients()
    {
        $this->hasMany(Ingredient::class);
    }
}
