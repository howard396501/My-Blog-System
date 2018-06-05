<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Storage;
class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function blog()
    {
        //return view('blog/blog');
        $data=DB::table('blog')->get();
        return view('/blog/blog',['blogRes'=>$data]);
    }
    public function blogadd()
    {
        
        
        return view('/blog/blogadd');
        
        
    }
    public function blogaddadd(Request $request)
    {
        $data=['author'=>$_POST['author'],'title'=>$_POST['title'],'type'=>$_POST['type'],'content'=>$_POST['content']];
        //$data=preg_replace("/\r{0,}\n/", "<br>\n",$data);
        // $data=preg_replace("/\s/","&nbsp;",$data);
        $data=str_replace(' ','&nbsp', $data);
        //echo nl2br($data);
        //$data=preg_replace("/<a[\s]+[^>]+>([^<>]+)<\/a>/", "", $data);
        $data['addtime']=time() + 60*60*8;

        //上傳圖片
        if ($request->hasFile('image')) 
        {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            Storage::put('upload/images/' . $filename, file_get_contents($request->file('image')->getRealPath()));
            $data['image']=$filename;
        }
        //上傳圖片

        $res=DB::table('blog')->insert($data);
        //echo nl2br($res);

        
        if($res)
        {
            echo '網誌增加成功！';
            return redirect('/blog');
        }
        else
        {
            echo '網誌增加失败QQ';
            
        }
        
    }
    public function edit(Request $request, $id)
    {   
        if($_POST)
        {
            $data=['author'=>$_POST['author'],'title'=>$_POST['title'],'type'=>$_POST['type'],'content'=>$_POST['content']];
            //$data=preg_replace("/\r{0,}\n/", "<br>\n",$data);
            // $data=preg_replace("/\s/","&nbsp;",$data);
            $data=str_replace(' ','&nbsp', $data);
            //echo nl2br($data);
            //$data=preg_replace("/<a[\s]+[^>]+>([^<>]+)<\/a>/", "", $data);
            
            //上傳圖片
            if ($request->hasFile('image')) 
            {
                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                Storage::put('upload/images/' . $filename, file_get_contents($request->file('image')->getRealPath()));
                $data['image']=$filename;
                
            }   
            //上傳圖片
            
            $save=DB::table('blog')->where('id', $id)->update($data);
            //echo nl2br($save);

            
            if($save != false)
            {
                return redirect('blog');
            }
            else
            {
                return '修改失敗QQ';
            }
        }
        else
        {
            $msg=DB::table('blog')->where('id', $id)->first();
            return view('blog/blogedit',['blog'=>$msg]);
        }
    }
    public function del($id)
    {
        $res=DB::table('blog')->delete($id);
        if($res)
        {
            return redirect('/blog');
        }
        else
        {
            return '刪除留言失敗！';
        }
    }

    // public function uploadpicture(Request $request)
    // {
    //     if ($request->hasFile('image')) 
    //     {
    //         $image = $request->file('image');
    //         $filename = $image->getClientOriginalName();
    //         Storage::put('upload/images/' . $filename, file_get_contents($request->file('image')->getRealPath()));
    //         $data['image']=$filename;
    //     }
    //     $res=DB::table('blog')->insert($data);
    // }
    public function index()
    {
        //$data=DB::table('blog')->get();
        //return view('/blog/blogindex',['blogRes'=>$data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
