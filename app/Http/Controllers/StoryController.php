<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryRequest;
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

    public function getAllStory(){
        $storyList = $this->storyRepository->getAllStories();
        return response()->json(['story' => $storyList]);
    }


    public function addStory(StoryRequest $request, StoryRepositoryInterface $storyRepository)
    {
        $name = $request->input('name');
        $author = $request->input('author');
        $genre = $request->input('genre');
        $illustration = $request->input('illustration');
        $page_quantity = $request->input('page_quantity');

        $newStory = $storyRepository->addStory($name, $author, $illustration, $page_quantity, $genre);
        if(!$newStory){
            return response()->json(['message' => 'Story added failed']);
        }
        return response()->json(['message' => 'Story added successfully'], 200);
    }

    public function updateStory(StoryRequest $request, StoryRepositoryInterface $storyRepository)
    {
        $id = $request->input('id');

        if (!$id) {
             return response()->json(['error' => 'Missing id'], 400);
        }

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

        if (!$id) {
             return response()->json(['error' => 'Missing id'], 400);
        }
        $deleteStory = $storyRepository->deleteStory($id);

        if($deleteStory == null){
            return response()->json(['message' => 'Story not found'], 404);
        }

        return response()->json(['message' => 'Story deleted successfully']);
    }


}
