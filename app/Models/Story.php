<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Story extends Model
{
    use HasFactory;

    public function getAllStory(){
        $story = DB::select('SELECT * FROM story');
        return $story;
    }
}
