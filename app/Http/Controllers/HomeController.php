<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function Home() {

        $users = DB::select("SELECT * FROM uses WHERE email=:email", [
            'email' => 'toanbui765@gmail.com'
        ]);

        dd($users);

        return view('home');
    }
    public function user() {
        $users = DB::select("SELECT * FROM uses ");
        return response()->json(['users' => $users]);

    }
    public function addUser(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
    
        DB::insert('INSERT INTO uses (fullname, email) VALUES (?, ?)', [$name, $email,]);
    
        return response()->json(['message' => 'User added successfully']);
    }

    public function updateUser(Request $request) {
        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');
    
        // Thực hiện truy vấn UPDATE để cập nhật thông tin người dùng
        DB::update('UPDATE uses SET fullname = ?, email = ? WHERE id = ?', [$name, $email, $id]);
    
        return response()->json(['message' => 'User updated successfully']);
    }

    public function deleteUser($id) {
       
        // dd($id);
        DB::delete('DELETE FROM uses WHERE id = ?', [$id]);
    
        return response()->json(['message' => 'User deleted successfully']);
    }
    
    

}
