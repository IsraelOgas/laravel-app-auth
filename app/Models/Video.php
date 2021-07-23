<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    // One-to-many inverse relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // One-to-many polyformic relationship
    public function comments() {
        return $this->morphMany('App\Models\Comment', 'taggable');
    }

    // Many-to-many polyformic relationship
    public function tags() {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
