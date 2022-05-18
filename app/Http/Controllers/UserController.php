<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    public function edit()
    {
        // $user = User::find($id);
        return view('add-edit');
    }
    //add-edit
    public function addedit(Request $request, $id = null)
    {
    // $request->validate([
    //         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    
    //        ]);
        if ($id == "") {
            $user = new User;
        } else {
            $user = User::find($id);
        }
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password = $request->password;
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->move('uploads/', $filename);
        $user->image = $filename;
        $user->save();
        
           return redirect('home');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('home');
    }
}
