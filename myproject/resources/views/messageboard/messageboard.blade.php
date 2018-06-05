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
            <h1>留言板</h1>
           
            <form action="" method="post" class="dark-matter">

                

                @if (Auth::guest())
                <span>名稱：</span>
                <input id="uname" type="text" name="uname" placeholder="說說你的名字~" />
                @else
                <span>名稱：</span>
                <input id="uname" type="text" name="uname" value="{{ Auth::user()->name }}" readonly="readonly" />
                @endif
                <br>
                <br>

                @if (Auth::guest())
                <span>電子信箱：</span>
                <input id="email" size="45" type="email" name="email" placeholder="請填入有效的電子信箱" />
                @else
                <span>電子信箱：</span>
                <input id="email" size="45" type="email" name="email" value="{{ Auth::user()->email }}" readonly="readonly" />
                @endif

                <br>
                <br>
                <span>留言內容</span>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="留一點訊息吧！" spellcheck="false"></textarea>
                <br>

                <label>
                    <span>&nbsp;</span>
                    <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                    <button type="submit" class="btn btn-primary" value="Send" />確定</button>
                </label>
                <br/>
                <ul class="pagination">
                    <li class="active"><a href="./index">觀看留言</a></li>
                </ul>    
            </form>
        </div>
 @stop