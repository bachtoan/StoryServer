<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;

class StoryController extends Controller
{
    private $story;

    public function __construct()
    {
        $this->story = new Story();
    }

    public function getStory(){
        $storyList = $this->story->queryBuilder();
        return response()->json(['users' => $storyList]);
    }
    public function addStory(Request $request){
    
        $this->story->addStory($request);
        return response()->json(['Success' => "Added story " ]);
    }

    public function updateStory(Request $request){

        $this->story->updateStory($request);
        return response()->json(['Success' => "Updated story " ]);
    }
}
