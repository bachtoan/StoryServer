<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Touchable extends Model
{
    use HasFactory;
    protected $fillable = ['id_sound'];

    public function touchables():BelongsToMany
    {
        return $this->belongsToMany(Page::class, 'page_touchables', 'id_touchable');   
        
    }

    public function sound():BelongsTo
    {
        return $this->belongsTo(Sound::class, 'id_sound');
        
    }
}
