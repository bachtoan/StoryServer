<?php

namespace App\Repositories\Content;

use App\Models\Content;
use App\Repositories\Content\ContentRepositoryInterface;
use Illuminate\Http\Request;


class ContentRepository implements ContentRepositoryInterface
{
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

        return true;
        
    }

    public function updateContent(Request $request){
        $id = $request->input('id');
        $content = $request->input('content');
        
    
        $findcontent = Content::find($id);
    
        if (!$findcontent) {
            return false;
        }
    
        $findcontent->content = $content;
       
        $findcontent->save();
    
        return true;
       
    }

    public function deleteContent(Request $request){
        $id = $request->input('id');

        $content = Content::find($id);
    
        if (!$content) {
            return false;
        }
    
        $content->delete();
    
        return true;
    }
}
