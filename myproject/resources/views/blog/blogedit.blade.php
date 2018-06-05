@extends('layouts.navbarapp')

@section('title')
<head>
        <title>網誌</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

        <script>
                tinymce.init({
                        selector: 'textarea'
                });
        </script>
</head>

@section('content')
        <div class="container">
                <h1>新增網誌</h1>
                <form action="" method="post" class="dark-matter" enctype="multipart/form-data">
                        <span>作者：</span>
                        <input id="author" type="text" name="author" value="<?php echo $blog->author;?>">
                        <br>
                        <br>

                        <span>標題：</span>
                        <input id="title" type="text" name="title" value="<?php echo $blog->title;?>">
                        <br>
                        <br>

                        <span>分類：</span>
                        <input id="type" type="text" name="type" value="<?php echo $blog->type;?>">
                        <br>
                        <br>

                        <script type="text/javascript">
                        // function nbsp()
                        // {
                        //         var strContent = document.getElementById("content").value;
                        //         strContent = strContent.replace(/\r{0,}\n/g,"<br/>").replace(/\s/g,"&nbsp;");
                        //         document.getElementById("content").value = strContent;

                        //         var strContent2 = document.getElementById("content").value;
                        //         var reg=/<a[\s]+[^>]+>([^<>]+)<\/a>/gi;
                        //         strContent2 = strContent2.replace(reg," ");
                        //         document.getElementById("content").value = strContent2;
                        // }
                        </script>
                        <span>內容：</span>
                        <textarea class="form-control" id="content" name="content" rows="5" spellcheck="false"><?php echo $blog->content;?></textarea>
                        <br>
                        <label>
                        <span>&nbsp;</span>
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <br>
                        <label>上傳圖片：</label>
                        <input type="file" name="image">
                        <p>
                        <p>
                        <button type="submit" class="btn btn-primary" value="Edit"  />修改完成</button>
                        </p>
                        </label>
                </form>
        </div>

@stop