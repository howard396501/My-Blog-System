<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Auth;
use Storage;

class MsgsController extends Controller
{

    public function index()
    {
        $data=DB::table('msg')->get();
        return view('/messageboard/index',['msgRes'=>$data]);
        
        
        //-------
        // $total_message=mysql_num_rows($data);//計算留言總筆數
        // $per=5;
        // $pages=ceil($total_message/$per);
        // if(!isset($_GET["page"]))
        // {
        //     $page=1;
        // }
        // else
        // {
        //     $page=intval($_GET["page"]);
        // }
        // $start=($page-1)*$per;
        //-------

        //$data=DB::table('users')->get();
        //return view('/messageboard/index',['usersRes'=>$data]);     
        

    }

    public function messageboard()
    {
        return view('/messageboard/messageboard');
    }
    //
    /*public function index()
    {
        $msg=Msg::get();
        return view('messageboard/index', ['msg'=>$msg]);
    }*/
    public function addpost(Request $request)
    {
        

        $data=['uname'=>$_POST['uname'],'email'=>$_POST['email'],'content'=>$_POST['content']];
        $data['addtime']=time() + 60*60*8;
        
        
            if(Auth::user())
            {
                $user=Auth::user();
                if($user->name == $data['uname'])
                {
                    $avatar=$request->file('avatar');
                    $filename=$user->avatar;
                    $data['avatar']=$filename;
                }
            }
            
            
        
        
        $res=DB::table('msg')->insert($data);
        if($res)
        {
            echo '訊息增加成功！';
            return redirect('/messageboard');
        }
        else
        {
            echo '訊息增加失败QQ';
            
        }
        
    }
    
    public function edit($id)
    {   
        if($_POST)
        {
            $data=['uname'=>$_POST['uname'],'email'=>$_POST['email'],'content'=>$_POST['content']];
            $save=DB::table('msg')->where('id', $id)->update($data);
            if($save != false)
            {
                return redirect('index');
            }
            else
            {
                return '修改失敗QQ';
            }
        }
        else
        {
            $msg=DB::table('msg')->where('id', $id)->first();
            return view('messageboard/edit',['msg'=>$msg]);
        }
    }

    public function del($id)
    {

            $res=DB::table('msg')->delete($id);
            if($res)
            {
                return redirect('/index');
            }
            else
            {
                return '刪除留言失敗！';
            }
        
        

        // $checked=Request::input('checked',[]);
        // foreach($checked as $id)
        // {
        //     $msg=DB::table('msg')->where('id', $id)->delete();
        // }
        // $msg=DB::table('msg')->whereIn($checked)->delete();
    }
}
