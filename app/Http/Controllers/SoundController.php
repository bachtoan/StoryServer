<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sound;

class SoundController extends Controller
{
    //
    public function getSounds(){
        $sounds = Sound::all();
        return response()->json(['story' => $sounds]);

    }
    public function addSound(Request $request){
        $soundUrl = $request->input('soundUrl');
        
        $newSound = new Sound();
        
        $newSound->soundUrl = $soundUrl;
        $newSound->save();

    return response()->json(['message' => 'Story added successfully']);
        
    }

    public function updateSound(Request $request){
        $id = $request->input('id');
        $soundUrl = $request->input('soundUrl');
        
    
        $sound = Sound::find($id);
    
        if (!$sound) {
            return response()->json(['message' => 'Sound not found'], 404);
        }
    
        $sound->soundUrl = $soundUrl;
       
        $sound->save();
    
        return response()->json(['message' => 'Sound updated successfully']);
       
    }

    public function deleteSound(Request $request){
        $id = $request->input('id');

        $sound = Sound::find($id);
    
        if (!$sound) {
            return response()->json(['message' => 'Sound not found'], 404);
        }
    
        $sound->delete();
    
        return response()->json(['message' => 'Sound deleted successfully']);
    }
}
