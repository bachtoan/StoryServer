<?php

namespace App\Repositories\Page;

use App\Models\Page;
use App\Repositories\Page\PageRepositoryInterface;
use Illuminate\Http\Request;


class PageRepository implements PageRepositoryInterface
{
    public function getAllPage(){
        return Page::all();
    }

    public function getStoryPage(Request $request){
        $id_story = $request->input('id_story');
        return Page::where('id_story', $id_story)->get();
    }

    public function addPage(Request $request)
    {
        $id_story = $request->input('id_story');
        $page_number = $request->input('page_number');
        $sound = $request->input('sound');
        $background = $request->input('background');
    
        $page = new Page();
        $page->id_story = $id_story;
        $page->page_number = $page_number;
        $page->sound = $sound;
        $page->background = $background;
        $page->save();
    
        return true;
    }

    public function updatePage(Request $request){
        $id = $request->input('id');
        
        $page_number = $request->input('page_number');
        $sound = $request->input('sound');
        $background = $request->input('background');

        $page = Page::find($id);
        if (!$id) {
            return false;
            }
        if (!$page) {
            return false;
        }

        $page->page_number = $page_number;
        $page->sound = $sound;
        $page->background = $background;
        $page->save();

        return true;
    }

    public function deletePage(Request $request){
        
        $id = $request->input('id');
        if (!$id) {
            return false;
            }
        $page = Page::find($id);
        
        if (!$page) {
            return false;
        }
        
        $page->delete();
        
        return response()->json(['message' => 'Page deleted successfully']);
        
    }

}
