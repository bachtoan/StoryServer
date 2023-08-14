<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use PSpell\Config;

class ContentController extends Controller
{
    //

    public function getContents(){
        $content = Content::all();
        return response()->json(['content' => $content]);

    }

    public function addContent(Request $request){
        $content = $request->input('content');
        $id_sound = $request->input('id_sound');
        $newContent = new Content();
        
        $newContent->content = $content;
        $newContent->id_sound = $id_sound;

        $newContent->save();

    return response()->json(['message' => 'Content added successfully']);
        
    }

    public function updateContent(Request $request){
        $id = $request->input('id');
        $content = $request->input('content');
        
    
        $findcontent = Content::find($id);
    
        if (!$findcontent) {
            return response()->json(['message' => 'Content not found'], 404);
        }
    
        $findcontent->content = $content;
       
        $findcontent->save();
    
        return response()->json(['message' => 'Content updated successfully']);
       
    }

    public function deleteContent(Request $request){
        $id = $request->input('id');

        $content = Content::find($id);
    
        if (!$content) {
            return response()->json(['message' => 'Content not found'], 404);
        }
    
        $content->delete();
    
        return response()->json(['message' => 'Content deleted successfully']);
    }
}
