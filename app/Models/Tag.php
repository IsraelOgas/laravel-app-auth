<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Many-to-many inverse polyformic relationship
    public function posts() {
        return $this->morphedByMany('App\Models\Post', 'taggable');
    }

    // Many-to-many inverse polyformic relationship
    public function videos() {
        return $this->morphedByMany('App\Models\Video', 'taggable');
    }
}
