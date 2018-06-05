<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
//use Image;
use Storage;
class UserController extends Controller
{
    //
    public function profile()
    {
        return view('profile', array('user' => Auth::user()));
    }
    public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            //$filename = time() . '.' . $avatar->getClientOriginalExtension();
            $filename = $avatar->getClientOriginalName();
            //Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );
            Storage::put('upload/avatars/' . $filename, file_get_contents($request->file('avatar')->getRealPath()));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()));
    }
}
