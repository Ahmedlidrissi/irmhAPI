<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{
    use HasFactory;

    public function categorie():HasOne{
        return $this->hasOne(Categorie::class, 'categorie_id');
    }
}
