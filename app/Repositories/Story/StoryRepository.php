<?php

namespace App\Repositories\Story;

use App\Models\Story;
use App\Repositories\Story\StoryRepositoryInterface;

class StoryRepository implements StoryRepositoryInterface
{
    public function getAllStories()
    {
        return Story::all();
    }

    public function addStory($name, $author, $illustration, $page_quantity)
    {
        $newStory = new Story();
        $newStory->name = $name;
        $newStory->author = $author;
        $newStory->illustration = $illustration;
        $newStory->page_quantity = $page_quantity;
        $newStory->save();

        return $newStory;
    }

    public function updateStory($id, $name, $author, $illustration, $page_quantity)
    {
        $story = Story::find($id);

        if (!$story) {
            return null;
        }

        $story->name = $name;
        $story->author = $author;
        $story->illustration = $illustration;
        $story->page_quantity = $page_quantity;
        $story->save();

        return $story;
    }

    public function deleteStory($id)
    {
        $story = Story::find($id);

        if (!$story) {
            return null;
        }
        $story->delete();
        return true;
    }

}
