<?php

namespace App\Repositories\Story;

interface StoryRepositoryInterface
{
    public function getAllStories();

    public function addStory($name, $author, $illustration, $page_quantity, $genre);

    public function updateStory($id, $name, $author, $illustration, $page_quantity);

    public function deleteStory($id);
}
