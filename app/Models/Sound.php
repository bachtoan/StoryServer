<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Content;

class Sound extends Model
{
    use HasFactory;

    public function content():HasOne
    {
        return $this->hasOne(Content::class);
        
    }
}
