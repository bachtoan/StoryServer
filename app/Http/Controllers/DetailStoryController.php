<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\Page;
use App\Models\Content;
use App\Models\Sound;
use App\Models\Touchable;
use App\Models\PageTouchable;
use App\Models\PageContent;

class DetailStoryController extends Controller
{
    //


    public function getDetailStory(Request $request){
        $id_story = $request->input('id_story');

        // Page::where('id_story', $id_story)->get();
        // return $page = Page::with('contents')->get();

        return $page = Page::with('contents.sound')->where('id_story', $id_story)-> get();
    }
}
