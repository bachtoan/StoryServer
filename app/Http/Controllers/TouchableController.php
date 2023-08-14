<?php

namespace App\Http\Controllers;

use App\Models\Touchable;
use Illuminate\Http\Request;

class TouchableController extends Controller
{
    //
    public function getTouchable(){
        $listtouchable = Touchable::all();
        return response()->json(['touchable' => $listtouchable]);
    }

    public function addTouchable(Request $request){
        $data = $request->input('data');
        $id_sound = $request->input('id_sound');

        $newTouchable = new Touchable();
        
        $newTouchable->data = $data;
        $newTouchable->id_sound = $id_sound;

        $newTouchable->save();

    return response()->json(['message' => 'Touchable added successfully']);
        
    }

    public function updateTouchable(Request $request){
        $id = $request->input('id');
        $data = $request->input('data');
        
    
        $findTouch = Touchable::find($id);
    
        if (!$findTouch) {
            return response()->json(['message' => 'Touchable not found'], 404);
        }
    
        $findTouch->data = $data;
       
        $findTouch->save();
    
        return response()->json(['message' => 'Touchable updated successfully']);
       
    }

    public function deleteTouchable(Request $request){
        $id = $request->input('id');

        $touchable = Touchable::find($id);
    
        if (!$touchable) {
            return response()->json(['message' => 'touchable not found'], 404);
        }
    
        $touchable->delete();
    
        return response()->json(['message' => 'touchable deleted successfully']);
    }
}
