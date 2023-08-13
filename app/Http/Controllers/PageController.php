<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    //

    public function getAllPage(){
        $pageList = Page::all();
        return response()->json(['page' => $pageList]);
    }

    
        
    public function getStoryPage(Request $request){
        $id_story = $request->input('id_story');

        $pages = Page::where('id_story', $id_story)->get();

        return response()->json(['pages' => $pages]);

    }

    public function addPage(Request $request){
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
    
        return response()->json(['message' => 'Page added successfully']);
    }
    

    public function updatePage(Request $request){
        $id = $request->input('id');
        $page_number = $request->input('page_number');
        $sound = $request->input('sound');
        $background = $request->input('background');

        $page = Page::find($id);

        if (!$page) {
            return response()->json(['message' => 'Page not found'], 404);
        }

        $page->page_number = $page_number;
        $page->sound = $sound;
        $page->background = $background;
        $page->save();

        return response()->json(['message' => 'Page updated successfully']);
    }


    
    public function deletePage(Request $request){
        $id = $request->input('id');

        $page = Page::find($id);
    
        if (!$page) {
            return response()->json(['message' => 'Page not found'], 404);
        }
    
        $page->delete();
    
        return response()->json(['message' => 'Page deleted successfully']);
    }

}
