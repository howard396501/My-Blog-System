<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Storage;
class homepageController extends Controller
{
    //
    public function homepage(Request $request)
    {
        $data=DB::table('title_image')->get();
        return view('homepage',['homepageimage'=>$data]);
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            Storage::put('upload/titleimage/' . $filename, file_get_contents($request->file('image')->getRealPath()));
            $data['image']=$filename;
        }
        //database format: id、image
        $res=DB::table('title_image')->insert($data);
        
    }

    

}
