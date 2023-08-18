<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Content;

class Page extends Model
{
    use HasFactory;
    public function contents():BelongsToMany
    {
        return $this->belongsToMany(Content::class, 'page_contents', 'id_page', 'id_content')->withPivot('positionX', 'positionY');
        
    }
}
