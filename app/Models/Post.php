<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // One to many relationship
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // One to many relationship
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    // One-to-one polyformic relationship
    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    // One-to-many polyformic relationship
    public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    // Many-to-many polyformic relationship
    public function tags() {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
