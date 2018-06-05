@extends('layouts.navbarapp')

@section('title')

    <head>
    
        <title>留言板</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
    </head>
@section('content')         
        <div class="container">
            <h1>留言列表</h1>
            @if (Auth::guest())
                                                  
            @elseif(Auth::user()->email == 'howard396501@gmail.com')
            <!-- <input type="submit" name="delete" class="btn btn-danger" value="刪除" > -->
            <?php
                // $delete=$_POST['delete'];
                // for($i=0;$i<count($delete);$i++)
                // {
                //     $deletesql="DELETE * FROM 'msg' WHERE 'id'=$value";
                //     mysqli_query($conn, $deletesql);
                // }
            ?>
            @elseif(Auth::user()->email != 'howard396501@gmail.com')
            @endif  
        </div>
        <?php
            //資料庫連結
            $conn=mysqli_connect('localhost:3307','root','','msg');
            //mysqli::query(such as SET NAMES utf8);//無用！！
            mysqli_query($conn, "SET NAMES 'utf8'"); //關鍵code !!!
            mysqli_select_db($conn,'msg');
            $sql="SELECT * FROM `msg` ORDER BY `id`";
            //$sql2="SELECT * FROM 'msg'";
            $result = mysqli_query($conn,$sql);

            $count=mysqli_num_rows($result);

            $data_nums = mysqli_num_rows($result); //統計總比數
            $per = 5; //每頁顯示項目數量
            $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
            if (!isset($_GET["page"]))
            { //假如$_GET["page"]未設置
                $page=1; //則在此設定起始頁數
            } 
            else 
            {
                $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
            }
            $start = ($page-1)*$per; //每一頁開始的資料序號
            $result = mysqli_query($conn, $sql.' LIMIT '.$start.', '.$per);
            
        ?>
         
        <?php 
        while ($row = mysqli_fetch_array ($result))
        { 
            //foreach($msgRes as $msg);
            
            $id=$row['id'];
            $email=$row['email'];
            $uname=$row['uname'];
            $content=$row['content'];
            $avatar=$row['avatar']; // add image
            $addtime=$row['addtime'];
            
        ?>
        <?php //foreach ($msgRes as $msg)?>      
            <br/>   
                <div class="container" style="background-color:#E0E0E0; border:double">  
                
                    <form action="" class="dark-matter" method="post">  <!-- form method post -->
                        <h5>
                        <img src="/myproject/storage/app/upload/avatars/<?php echo $avatar; ?>" style="width:100px; height:100px ; border-radius:50%; margin-right:25px;">
                            @if (Auth::guest())
                                                  
                            @elseif(Auth::user()->email == 'howard396501@gmail.com')     
                                 
                            <input type="checkbox" name="checkbox[]" value="<?php echo $row['id']; ?>">    <!-- 使用$row['id']抓取留言的id-->                       
                            @elseif(Auth::user()->email != 'howard396501@gmail.com')
                            @endif
                            
                            <span title="<?php echo $email;?>"><?php echo $uname;?>
                            <p align=right><font size=1px><?php echo date("Y-m-d H:i:s", $addtime);?></font>
                            </span>
                        </h5>
                        <hr style="border: none; border-bottom: 2px solid gray;">
                        <p><?php echo $content;?></p>           
                        <font>
                            <p align="right">
                            
                            @if (Auth::guest())
                                                  
                            @elseif(Auth::user()->email == 'howard396501@gmail.com')
                            <a href="<?php echo URL::action('MsgsController@del',['id'=>$id]); ?>"><input type="button" class="btn btn-danger" value="刪除"  onclick="return confirm('確定刪除此篇留言嗎？');"></a>
                            <input type="button" class="btn btn-primary" value="修改" onclick="location.href='<?php echo URL::action('MsgsController@edit',['id'=>$id]); ?>'">
                            </p>
                            @elseif(Auth::user()->email != 'howard396501@gmail.com')
                             
                            <?php //$user = Auth::user();
                                  //var_dump($user->email);
                                  $user = Auth::user();
                                  //$data=['uname'=>$_GET['uname']];
                                  //$user_id = DB::table('users')->get();
                                  
                            ?>

                            @if($user->email == $email)
                            <a href="<?php echo URL::action('MsgsController@del',['id'=>$id]); ?>"><input type="button" class="btn btn-danger" value="刪除"  onclick="return confirm('確定刪除此篇留言嗎？');"></a>
                            <input type="button" class="btn btn-primary" value="修改" onclick="location.href='<?php echo URL::action('MsgsController@edit',['id'=>$id]); ?>'">
                            @endif
                            
                            
                            @endif
                                                   
                        </font> 
                     
                </div>  
            <br/>    
        <?php //endforeach;?>
        <?php
            }
        ?>
        
            @if (Auth::guest())

            @elseif(Auth::user()->email == 'howard396501@gmail.com')
            <div class="container">
                <span>&nbsp;</span>
                <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                <button name="delete" class="btn btn-danger" type="submit" value="delete">多項刪除</button><p>
            </div>
            @elseif(Auth::user()->email != 'howard396501@gmail.com')

            @endif
            <?php
            if(isset($_POST['delete']))
            {
                $checkbox=$_POST['checkbox'];
                for($i=0;$i<count($checkbox);$i++)
                {
                    $del_id=$checkbox[$i];
                    $del_sql="DELETE FROM `msg` WHERE `id`='$del_id'"; //` `括號很重要
                    $result = mysqli_query($conn,$del_sql);
                }
                if($result)
                {
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=index\">";  //刷新頁面避免更新問題
                }
                
            }  
            ?>
          
        
        
        
        <div class="container">
            
            <?php
                    //分頁號碼
                    echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
                    echo "<br /><a href=?page=1>首頁</a> ";
                    echo "第 ";
                    for( $i=1 ; $i<=$pages ; $i++ ) 
                    {
                        if ( $page-3 < $i && $i < $page+3 ) 
                        {
                            echo "<a href=?page=".$i.">".$i."</a> ";
                            
                        }
                    }
                    echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
            ?>
        </div>
        </form>   <!-- form method post -->
         
@stop