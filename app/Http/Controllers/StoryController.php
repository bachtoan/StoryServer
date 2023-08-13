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
        $storyList = Story::all();
        return response()->json(['story' => $storyList]);

    }
    public function addStory(Request $request){
        $name = $request->input('name');
        $author = $request->input('author');
        $illustration = $request->input('illustration');
        $page_quantity = $request->input('page_quantity');

        $newStory = new Story();
        $newStory->name = $name;
        $newStory->author = $author;
        $newStory->illustration = $illustration;
        $newStory->page_quantity = $page_quantity;
        $newStory->save();

    return response()->json(['message' => 'Story added successfully']);
        
    }

    public function updateStory(Request $request){
        $id = $request->input('id');
        $name = $request->input('name');
        $author = $request->input('author');
        $illustration = $request->input('illustration');
        $page_quantity = $request->input('page_quantity');
    
        $story = Story::find($id);
    
        if (!$story) {
            return response()->json(['message' => 'Story not found'], 404);
        }
    
        $story->name = $name;
        $story->author = $author;
        $story->illustration = $illustration;
        $story->page_quantity = $page_quantity;
        $story->save();
    
        return response()->json(['message' => 'Story updated successfully']);
       
    }

    public function deleteStory(Request $request){
        $id = $request->input('id');

        $story = Story::find($id);
    
        if (!$story) {
            return response()->json(['message' => 'Story not found'], 404);
        }
    
        $story->delete();
    
        return response()->json(['message' => 'Story deleted successfully']);
    }


}
