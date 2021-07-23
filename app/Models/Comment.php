<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // One-to-many inverse relationship
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // Polyformic relationship
    public function commentable() {
        return $this->morphTo();
    }
}
