<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Sound;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['id_sound'];

    public function pages():BelongsToMany
    {
        return $this->belongsToMany(Page::class, 'page_contents', 'id_content');
        
    }

    public function sound():BelongsTo
    {
        return $this->belongsTo(Sound::class, 'id_sound');
        
    }
}
