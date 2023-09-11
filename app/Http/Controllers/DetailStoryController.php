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

        $story = Story::with(['pages' => function($query) {
            $query->orderBy('page_number', 'asc');
        }, 'pages.contents.sound', 'pages.touchables.sound'])->find($id_story);
        if(!$story){
            return response(["Story Not Found"],401);
        }else{
            return response(["data" => $story], 201);
        }

    }
}
