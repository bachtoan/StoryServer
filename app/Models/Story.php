<?php

namespace App\Models;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    public function pages()
    {
        return $this->hasMany(Page::class, 'id_story', 'id');
    }
}
