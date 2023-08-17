<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Repositories\Content\ContentRepositoryInterface;
use Illuminate\Http\Request;
use PSpell\Config;

class ContentController extends Controller
{
    //
    protected $contentRepository; 

    public function __construct(ContentRepositoryInterface $contentRepository)
    {
        $this->contentRepository = $contentRepository;
    }
    public function getContents(){
        $content = $this->contentRepository->getContents();
        return response()->json(['content' => $content]);

    }

    public function addContent(Request $request){
        $this->contentRepository->addContent($request);

    return response()->json(['message' => 'Content added successfully']);
        
    }

    public function updateContent(Request $request){
        if($this->contentRepository->updateContent($request)){
            return response()->json(['message' => 'Content updated successfully']);
        }else{
            return response()->json(['message' => 'Content not found']);
        }
       
    }

    public function deleteContent(Request $request){
        if($this->contentRepository->deleteContent($request)){
            return response()->json(['message' => 'Content delete successfully']);
        }else{
            return response()->json(['message' => 'Content not found']);
        }
    }
}
