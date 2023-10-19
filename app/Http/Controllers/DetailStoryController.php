<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;


class DetailStoryController extends Controller
{
    //


    public function getDetailStory($id){

        $story = Story::with(['pages' => function($query) {
            $query->orderBy('page_number', 'asc');
        }, 'pages.contents.sound', 'pages.touchables.sound'])->find($id);
        if(!$story){
            return response(["Story Not Found"],401);
        }else{
            return response(["data" => $story], 201);
        }

    }
}
