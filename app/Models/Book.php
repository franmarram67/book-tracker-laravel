<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

#[Fillable(['title', 'description', 'image_path', 'user_id'])]
class Book extends Model
{
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
