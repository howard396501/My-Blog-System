@extends('layouts.navbarapp')

@section('title')

    <head>
        <title>個人資料</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
     
@section('content')
    <div class="container">
        <h2> {{$user->name}}的個人資料</h2>
        <img src="/myproject/storage/app/upload/avatars/{{ $user->avatar }}" style="width:200px; height:200px ; border-radius:50%; margin-right:25px;">  
        <form enctype="multipart/form-data" action="profile" method="POST">
            <label>上傳大頭貼</label><p>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"><p>
            <input type="submit" class="pull-right btn btn-sm btn-primary">
        </form>
    </div>
@stop