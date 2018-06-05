@extends('layouts.navbarapp')

@section('title')
<head>
        <title>關於本站</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>

@section('content')

        <div class="container">
                <div class="col-md-9">
                        <h1>本站介紹</h1><br>
                                
                                本站創立於民國107年，其前身為以google提供之blogspot平台之部落格，本站之開發原為國立臺北科技大學
                                網路技術實驗室之新生PHP Laravel框架訓練技術內容之一，最初之版型只有一個留言版，開發者陳子軒同學
                                將其擴增成一個部落格系統，並將其原部落格內容移植至此；部落格主標題「On my way」有「走出自己道路」
                                之意思，副標題「The past to the future」為「從過去到未來」，代表未來與過去相互連結的象徵意義。
                                <br>
                                <br>
                                本站原址為google提供之blogspot，
                                原址：<a class="btn btn-info" href="http://mr-sochen.blogspot.tw/" role="button" data-toggle="tooltip" data-placement="top" title="快點開來看！">View details &raquo;</a><br>
                                <script>
                                $(document).ready(function(){
                                $('[data-toggle="tooltip"]').tooltip();   
                                });
                                </script>
                                <br>
                                
                </div>
        </div>
        <div class="container">
                <div class="col-md-9">
                        <b>目前開發完成度：65%</b>
                        <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:65%"></div>
                        </div>
                        <br>
                        <br>
                        <hr>
                </div>
                
        </div>
        <div class="container">
                <div class="col-md-9">
                        <h1>本站內容</h1><br>
                        本站基於原部落格主題內容，主要探討「資訊技術」和「教育時事」，偶爾版主也會在此抒發自己的個人情感
                        其內容成為「資訊技術」、「教育時事」和「生活閒聊」三方面之主題，「資訊技術」目前著重於創客平台之
                        教學和專案製作，例如Arduino、Raspberry Pi；「教育時事」部分主要探討高等教育及技職教育；「生活
                        閒聊」為純抒發之日記式作文，偶有古詩和散文創作，未來會另有分類。
                        <hr>
                </div>
        </div>
        <div class="container">
                <div class="col-md-9">
                        <h1>本站架構</h1><br>
                        大標題─「On my way - The past to the future」為首頁<br>
                        「關於表站」<br>
                        　● 本站介紹<br>
                        　● 本站內容<br>
                        　● 本站架構<br>
                        「版主介紹」<br>
                        　● 個人簡介<br>
                        　● 版主學歷<br>
                        　● 版主興趣<br>
                        「網誌」<br>
                        　● 資訊技術<br>
                        　● 教育時事<br>
                        　● 生活閒聊<br>
                        「實用網站」<br>
                        「留言板」<br>
                        <hr>
                </div>
        </div>

@stop
