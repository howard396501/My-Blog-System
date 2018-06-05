@extends('layouts.navbarapp')

@section('title')
<head>
        <title>網誌</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

@section('content')
        <div class="container">
                <h1>我的網誌</h1>
        </div>
        <?php
            //資料庫連結
        //     $conn=mysqli_connect('localhost:3307','root','','msg');
        //     mysqli_select_db($conn,'msg');
        //     $sql="SELECT * FROM `blog` ORDER BY `id`";
        //     $result = mysqli_query($conn,$sql);

        //     $data_nums = mysqli_num_rows($result); //統計總比數
        //     $per = 5; //每頁顯示項目數量
        //     $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
        //     if (!isset($_GET["page"]))
        //     { //假如$_GET["page"]未設置
        //         $page=1; //則在此設定起始頁數
        //     } 
        //     else 
        //     {
        //         $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
        //     }
        //     $start = ($page-1)*$per; //每一頁開始的資料序號
        //     $result = mysqli_query($conn, $sql.' LIMIT '.$start.', '.$per);

        ?>
        <?php foreach($blogRes as $blog):?>

                <br/>
                        <div class="container" style="background-color:#E0E0E0; border:double">
                                <form action="" class="dark-matter" >
                                        <h5>
                                                <span>
                                                作者：<?php echo $blog->author;?></p>
                                                標題：<?php echo $blog->title;?></p>
                                                分類：<?php echo $blog->type;?> 
                                                <p align=right><font size=1px><?php echo date("Y-m-d H:i:s", $blog->addtime);?></font>
                                                </span>
                                        </h5>
                                        <hr style="border: none; border-bottom: 2px solid gray;">
                                        <p><?php echo nl2br($blog->content);?>
                                        </p>
                                        <img src="/myproject/storage/app/upload/images/<?php echo $blog->image; ?>" class="img-thumbnail" width="300" height="250">
                                        
                                        
                                                                                                                  
                                </form>
                                        <font>
                                                <p align="right">
                                                @if(Auth::guest())
                                                @elseif(Auth::user()->email == 'howard396501@gmail.com')
                                                <a href="<?php echo URL::action('blogController@del',['id'=>$blog->id]); ?>"><input type="button" class="btn btn-danger" value="刪除" onclick="return confirm('確定刪除此篇網誌嗎？')"></a>
                                                <input type="button" class="btn btn-primary" value="修改" onclick="location.href='<?php echo URL::action('blogController@edit',['id'=>$blog->id]); ?>'">
                                                @endif
                                        </font>
                        </div>
                <br/>

        <?php endforeach; ?>
        <div class="container">
                @if(Auth::guest())

                @elseif(Auth::user()->email == 'howard396501@gmail.com')
                <a href="./blogadd">新增網誌</a>
                @endif
        </div>
        <div class="container">
            <?php
        //             //分頁號碼
        //             echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
        //             echo "<br /><a href=?page=1>首頁</a> ";
        //             echo "第 ";
        //             for( $i=1 ; $i<=$pages ; $i++ ) 
        //             {
        //                 if ( $page-3 < $i && $i < $page+3 ) 
        //                 {
        //                     echo "<a href=?page=".$i.">".$i."</a> ";
        //                 }
        //             }
        //             echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
        //     ?>
        </div>
        
@stop
