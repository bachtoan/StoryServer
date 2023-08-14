<?php

namespace App\Http\Controllers;

use App\Models\PageContent;
use Illuminate\Http\Request;

class PageContentController extends Controller
{
    public function getPageContents(Request $request){
        $id_page = $request->input('id_page');

        $pageContent = PageContent::where('id_page', $id_page)->get();

        return response()->json(['pageContent' => $pageContent]);

    }

    public function addPageContent(Request $request){
        $id_page = $request->input('id_page');
        $id_content = $request->input('id_content');
        $id_touchable = $request->input('id_touchable');
        $positionX = $request->input('positionX');
        $positionY = $request->input('positionY');

        $newPageContent = new PageContent();


        $newPageContent->id_page = $id_page;
        $newPageContent->id_content = $id_content;
        $newPageContent->id_touchable = $id_touchable;
        $newPageContent->positionX = $positionX;
        $newPageContent->positionY = $positionY;

        $newPageContent->save();

        return response()->json(['message' => 'PageContent added successfully']);
        
    }

    public function updatePageContent(Request $request){
        $id = $request->input('id');
        $id_page = $request->input('id_page');
        $id_content = $request->input('id_content');
        $id_touchable = $request->input('id_touchable');
        $positionX = $request->input('positionX');
        $positionY = $request->input('positionY');
        
    
        $findPagecontent = PageContent::find($id);
    
        if (!$findPagecontent) {
            return response()->json(['message' => 'Pagecontent not found'], 404);
        }
    
        $findPagecontent->id_page = $id_page;
        $findPagecontent->id_content = $id_content;
        $findPagecontent->id_touchable = $id_touchable;
        $findPagecontent->positionX = $positionX;
        $findPagecontent->positionY = $positionY;
       
        $findPagecontent->save();
    
        return response()->json(['message' => 'Content updated successfully']);
       
    }

    public function deletePageContent(Request $request){
        $id = $request->input('id');

        $pagecontent = PageContent::find($id);
    
        if (!$pagecontent) {
            return response()->json(['message' => 'pagecontent not found'], 404);
        }
    
        $pagecontent->delete();
    
        return response()->json(['message' => 'pagecontent deleted successfully']);
    }
}
