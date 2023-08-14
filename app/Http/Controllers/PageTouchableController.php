<?php

namespace App\Http\Controllers;

use App\Models\PageTouchable;
use Illuminate\Http\Request;

class PageTouchableController extends Controller
{
    //
    public function getPageTouchables(Request $request){
        $id_page = $request->input('id_page');

        $pageTouchable = PageTouchable::where('id_page', $id_page)->get();

        return response()->json(['pageTouchable' => $pageTouchable]);

    }

    public function addPageTouchable(Request $request){
        $id_page = $request->input('id_page');
        $id_touchable = $request->input('id_touchable');
        $positionX = $request->input('positionX');
        $positionY = $request->input('positionY');

        $newPageTouchable = new PageTouchable();


        $newPageTouchable->id_page = $id_page;
        $newPageTouchable->id_touchable = $id_touchable;
        $newPageTouchable->positionX = $positionX;
        $newPageTouchable->positionY = $positionY;

        $newPageTouchable->save();

        return response()->json(['message' => 'PageTouchable added successfully']);
        
    }

    public function updatePageTouchable(Request $request){
        $id = $request->input('id');
        $id_page = $request->input('id_page');
        $id_touchable = $request->input('id_touchable');
        $positionX = $request->input('positionX');
        $positionY = $request->input('positionY');
        
    
        $findPageTouchable = PageTouchable::find($id);
    
        if (!$findPageTouchable) {
            return response()->json(['message' => 'PageTouchable not found'], 404);
        }
    
        $findPageTouchable->id_page = $id_page;
        $findPageTouchable->id_touchable = $id_touchable;
        $findPageTouchable->positionX = $positionX;
        $findPageTouchable->positionY = $positionY;
       
        $findPageTouchable->save();
    
        return response()->json(['message' => 'PageTouchable updated successfully']);
       
    }

    public function deletePageTouchable(Request $request){
        $id = $request->input('id');

        $pageTouchable = PageTouchable::find($id);
    
        if (!$pageTouchable) {
            return response()->json(['message' => 'pagecontent not found'], 404);
        }
    
        $pageTouchable->delete();
    
        return response()->json(['message' => 'pagecontent deleted successfully']);
    }
}
