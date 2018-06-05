@extends('layouts.navbarapp')

@section('title')

    <head>
        <title>實用網站</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
     
@section('content')
    <div class="container">
        <h1>實用網站</h1>
        <form>
            1.<a href="http://www.tocwc.org.tw/">台灣開放式課程聯盟</a><br>
            2.<a href="http://class.turn.tw/portfolio/html-and-css/">轉個彎教室</a><br>
            3.<a href="https://www.w3schools.com/">W3schools</a><br>
            4.<a href="https://codepen.io/">CodePen</a><br>
            5.<a href="http://www.tcgs.tc.edu.tw/~sagit/cpp/">C++程式設計</a><br>
            6.<a href="http://www.ziyou.math.ncu.edu.tw/~ziyou/c++/practice/index.htm">C++題目</a><br>
            7.<a href="http://faculty.stust.edu.tw/~wjshieh/">單晶片教學</a><br>
            8.<a href="http://coopermaa2nd.blogspot.tw/">Cooper Maa的Arduino教學</a><br>
            9.<a href="http://yehnan.blogspot.tw/">葉難的部落格</a><br>
        </form>
    </div>
@stop