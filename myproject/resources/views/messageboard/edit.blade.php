@extends('layouts.navbarapp')

@section('title')
    <head>
        <title>留言板</title>

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
            <h1>修改留言</h1>
            <form action="" method="post" class="dark-matter">
                <span>名稱：</span>
                <input id="uname" type="text" name="uname" value="<?php echo $msg->uname;?>" />
                <br>
                <br>
                @if (Auth::guest())
                <span>電子信箱：</span>
                <input id="email" size="45" type="email" name="email" value="<?php echo $msg->email;?>" />
                @else
                <span>電子信箱：</span>
                <input id="email" size="45" type="email" name="email" value="{{ Auth::user()->email }}" readonly="readonly" />
                @endif
                <br>
                <br>
                <span>留言內容</span>
                <textarea class="form-control" id="content" name="content" rows="5" spellcheck="false" ><?php echo $msg->content;?></textarea>
                <br>

                <label>
                    <span>&nbsp;</span>
                    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                    <button type="submit" class="btn btn-primary" value="Edit" />修改完成</button>
                </label>
                <br/>   
            </form>
        </div>
@stop
