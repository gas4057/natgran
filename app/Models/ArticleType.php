<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    public $timestamps = false;

    public function articles()
    {
        return $this->hasMany(Articles::class);
    }
}
