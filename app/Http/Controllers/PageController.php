<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Repositories\Page\PageRepositoryInterface;

class PageController extends Controller
{
    //
    protected $pageRepository;
    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function getAllPage(){
        $pageList = $this->pageRepository->getAllPage();
        return response()->json(['page' => $pageList]);
    }

    
        
    public function getStoryPage(Request $request){
        
        $pages = $this->pageRepository->getStoryPage($request);

        return response()->json(['pages' => $pages]);

    }

    public function addPage(PageRequest $request){
        if($this->pageRepository->addPage($request)){
            return response()->json(['message' => 'Page added successfully']);
        }
        
    
        
    }
    

    public function updatePage(PageRequest $request){
        if($this->pageRepository->updatePage($request)){
            return response()->json(['message' => 'Page updated successfully']);
        }else{
            return response()->json(['message' => 'Page not found or missing id']); 
        }
    }


    
    public function deletePage(Request $request){
        if($this->pageRepository->deletePage($request)){
            return response()->json(['message' => 'Page deleted successfully']);
        }else{
            return response()->json(['message' => 'Page not found or missing id']);
        }
    }

}
