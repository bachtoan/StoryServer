<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Content;
use App\Models\Touchable;


class Page extends Model
{
    use HasFactory;
    public function contents():BelongsToMany
    {
        return $this->belongsToMany(Content::class, 'page_contents', 'id_page', 'id_content')->withPivot('positionX', 'positionY');

    }
    public function touchables():BelongsToMany
    {
        return $this->belongsToMany(Touchable::class, 'page_touchables', 'id_page', 'id_touchable')->withPivot('positionX', 'positionY','touchWidth', 'touchHeight');
    }
}
