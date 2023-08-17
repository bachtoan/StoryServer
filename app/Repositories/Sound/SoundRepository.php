<?php

namespace App\Repositories\Sound;

use App\Models\Sound;
use App\Repositories\Sound\SoundRepositoryInterface;
use Illuminate\Http\Request;


class SoundRepository implements SoundRepositoryInterface
{
    public function getSounds(){
        $sounds = Sound::all();
        return response($sounds);

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
        if (!$id) {
            return false;
            }
        if (!$sound) {
            return false;
        }
    
        $sound->soundUrl = $soundUrl;
       
        $sound->save();
    
        return true;
       
    }

    public function deleteSound(Request $request){
        $id = $request->input('id');

        $sound = Sound::find($id);
        if (!$id) {
            return false;
            }
        if (!$sound) {
            return false;
        }
    
        $sound->delete();
    
        return true;
    }
}
