<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    public function getStory(){
        $story = new Story();
        $storyList = $story->getAllStory();
        return response()->json(['users' => $storyList]);
    }
}
