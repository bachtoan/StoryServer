<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Repositories\Story\StoryRepositoryInterface;

class StoryController extends Controller
{
    protected $storyRepository; 

    public function __construct(StoryRepositoryInterface $storyRepository)
    {
        $this->storyRepository = $storyRepository;
    }

    public function getStory(){
        $storyList = $this->storyRepository->getAllStories();
        return response()->json(['story' => $storyList]);
    }


    public function addStory(Request $request, StoryRepositoryInterface $storyRepository)
    {
        $name = $request->input('name');
        $author = $request->input('author');
        $illustration = $request->input('illustration');
        $page_quantity = $request->input('page_quantity');

        $newStory = $storyRepository->addStory($name, $author, $illustration, $page_quantity);

        return response()->json(['message' => 'Story added successfully']);
    }

    public function updateStory(Request $request, StoryRepositoryInterface $storyRepository)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $author = $request->input('author');
        $illustration = $request->input('illustration');
        $page_quantity = $request->input('page_quantity');

        $updatedStory = $storyRepository->updateStory($id, $name, $author, $illustration, $page_quantity);

        if (!$updatedStory) {
            return response()->json(['message' => 'Story not found'], 404);
        }

        return response()->json(['message' => 'Story updated successfully']);
    }

    public function deleteStory(Request $request, StoryRepositoryInterface $storyRepository){
        $id = $request->input('id');

        $deleteStory = $storyRepository->deleteStory($id);

        if($deleteStory == null){
            return response()->json(['message' => 'Story not found'], 404);
        }
    
        return response()->json(['message' => 'Story deleted successfully']);
    }


}
