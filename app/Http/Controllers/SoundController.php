<?php

namespace App\Http\Controllers;

use App\Http\Requests\SoundRequest;
use Illuminate\Http\Request;
use App\Models\Sound;
use App\Repositories\Sound\SoundRepositoryInterface;

class SoundController extends Controller
{
    //

    protected $soundRepository; 

    public function __construct(SoundRepositoryInterface $soundRepository)
    {
        $this->soundRepository = $soundRepository;
    }
    public function getSounds(){
        $sounds = $this->soundRepository->getSounds();
        return response()->json($sounds);

    }
    public function addSound(SoundRequest $request){
        $this->soundRepository->addSound($request);

        return response()->json(['message' => 'Sound added successfully']);
        
    }

    public function updateSound(SoundRequest $request){
        if($this->soundRepository->updateSound($request)){
            return response()->json(['message' => 'Sound updated successfully']);
        }else{
            return response()->json(['message' => 'Sound not found or missed id']);
        }
       
    }

    public function deleteSound(Request $request){
        if($this->soundRepository->deleteSound($request)){
            return response()->json(['message' => 'Sound delete successfully']);
        }else{
            return response()->json(['message' => 'Sound not found or missed id']);
        }
    }
}
