@extends('layouts.navbarapp')

@section('title')

    <head>
        <title>版主介紹</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {{ URL::asset('assets/css/social_icon.css') }}
    </head>
    
    <style>
        
        /* #NTUTlogo{
            position:absolute;
            
            width:100px;
            height:60px;
            z-index:1;
        }
        #NCKUlogo{
            position:absolute;
            
            width:100px;
            height:100px;
            z-index:2;
        }
        #CCUlogo{
            position:absolute;
            
            width:100px;
            height:100px;
            z-index:1;
        }
        #NTUTlogo_2{
            position:absolute;
            
            width:100px;
            height:60px;
            z-index:2;
        }
        #NFUlogo{
            position:absolute;
            
            width:100px;
            height:60px;
            z-index:5;
        }
        #FXSHlogo{
            position:absolute;
            
            width:100px;
            height:100px;
            z-index:5;
        } */
    </style>
@section('content')

    <div class="container">
        
        <div class="row snippet-profile-061">
			<div class="col-sm-4">
				<h1><b>陳子軒</b></h1>
				<p>臺北科技大學電機工程系碩士班</p>
				<p>臺北科技大學能源與冷凍空調工程學士</p>
				<p><br></p>
				<p>喜歡學習新事物，並對教育有熱誠，時常關住技職教育的發展，每年固定會關心母校學弟妹升學和未來發展，也曾在中正大學資訊工程學研究所擔任授課助教，是一位充滿教育熱誠的工程師。</p>
				<p><br></p>
				<p>讀萬卷書不如行萬里路，酷愛旅行，喜歡開車上山下海，體驗當地人文之美。</p>
				<p>
				<p><br>
                <a href="https://www.facebook.com/AlexHoward078LFX" class="fa fa-facebook"></a>
                <a href="https://www.instagram.com/howard396501/" class="fa fa-instagram"></a>
                <a href="https://plus.google.com/u/0/115848801238628877379" class="fa fa-google"></a>
                <a href="https://www.youtube.com/channel/UCtJrqZ8kWpCWRKDq4MnN_Tg?view_as=subscriber" class="fa fa-youtube"></a>
                
                

			</div>
			<div class="col-sm-8"><img alt="Profile 06 00@2x 1eefad8fbe6a673df05fbf5e2852a74aa9d79ca70552a626532fa30bd71725f3" data-no-retina="true" src="https://images.cakeresume.com/tinified/0cc632/ad133c41-65fd-40eb-9876-46a755e6b66d.png" style="border-radius: 100px; width=800; height:350;">
            </div>
			<div class="row snippet-separator-001">
				<div class="col-xs-12">
					<hr>
				</div>
            </div>
		</div>
        <hr>
        學歷：<br>
            <b>國立臺北科技大學</b>　　　　電機工程系（計算機工程組）碩士班 2017/09 ~ now　　<img src="https://i.imgur.com/4KwsD2v.png" id="NTUTlogo" width="100" height="60"><br><br>
            <b>國立成功大學</b>　　　　　　工程科學系（資訊與應用組）研究生 2017/02 ~ 2017/06<img src="https://i.imgur.com/rgY0qNx.png", id="NCKUlogo"width="100" height="100"><br><br>
            <b>國立中正大學</b>　　　　　　資訊工程學系碩士班<b><font color='red'>肄業　　　　　</font></b> 2016/09 ~ 2017/06<img src="https://i.imgur.com/TGdaCE8.png", id="CCUlogo"width="100" height="100"><br><br>
            <b>國立臺北科技大學</b>　　　　能源與冷凍空調工程系<b><font color='blue'>學士　　　　</font></b> 2012/09 ~ 2016/01<img src="https://i.imgur.com/4KwsD2v.png" id="NTUTlogo_2" width="100" height="60"><br><br>
            <b>國立虎尾科技大學</b>　　　　工業管理系<b><font color='red'>肄業　　　　　　　　　</font></b> 2011/09 ~ 2012/06<img src="https://i.imgur.com/y7TE4mb.png", id="NFUlogo"width="100" height="60"><br><br>
            <b>桃園市私立振聲高級中學</b>　資訊科　　　　　　　　　　　　　 2008/09 ~ 2011/06<img src="https://i.imgur.com/l4WG3WV.gif", id="FXSHlogo"width="100" height="100"<br>
        <hr>
            
        <div class="row featurette">
            <div class="col-md-7">
            <h2 class="featurette-heading">興趣 <span class="text-muted"><p>改裝車和玩電子晶片</span></h2>
            <p class="lead">將知識應用於生活，平日閒暇之餘偶爾研究汽機車，並將機車電系加以改裝，左圖為機車上車廂燈條；倘若在家裡也喜歡玩玩Arduino之類的簡易單晶片，因此曾任中正大學的物聯網應用系統助教並上台授課。</p>
            </div>
            <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="https://images.cakeresume.com/tinified/0cc632/63a6f35d-14df-40ac-9212-bc2985d0038e.png" alt="Generic placeholder image" style="width:400; height:400; border-radius: 200px;">
            </div>
        </div>

        <div class="row featurette">
            <div class="col-md-5 pull-md-7">
            <img class="featurette-image img-fluid mx-auto" src="https://images.cakeresume.com/tinified/0cc632/fbae3ffd-2ea0-4c68-acbb-bb857840d4b8.png" alt="Generic placeholder image" style="width:400; height:250; border-radius: 100px;">
            </div>
            <div class="col-md-7 push-md-5">
            <h2 class="featurette-heading">興趣<span class="text-muted"><p>旅行→體驗生命中的美好</span></h2>
            <p class="lead">在家裡常常坐不住，沒事喜歡往郊外走，親近大自然，最喜歡的是使用交通工具去全台各地自助旅行，這張照片是2012年要從桃園家出發去台中前所拍下。</p>
            </div>
        </div>	
        <hr>
    </div>
    <!-- <div class="container">
        <div class="container">
        
        <br>
        <img src="https://s7.pimg.tw/avatar/howard396501/0/0/zoomcrop/150x150.png?v=1427374409"  width="185" height="200"  style="border-radius:50%"></a>
        <br>
        陳子軒
            <br>
            學歷：<br>
            國立臺北科技大學　　　　電機工程系（計算機工程組）碩士班 2017/09 ~ now<br>
            國立成功大學　　　　　　工程科學系（資訊與應用組）研究生 2017/02 ~ 2017/06<br>
            國立中正大學　　　　　　資訊工程學系碩士班<b><font color='red'>肄業　　　　　</font></b> 2016/09 ~ 2017/06<br>
            國立臺北科技大學　　　　能源與冷凍空調工程系<b><font color='blue'>學士　　　　</font></b> 2012/09 ~ 2016/01<br>
            國立虎尾科技大學　　　　工業管理系<b><font color='red'>肄業　　　　　　　　　</font></b> 2011/09 ~ 2012/06<br>
            桃園市私立振聲高級中學　資訊科　　　　　　　　　　　　　 2008/09 ~ 2011/06<br>
            <hr>
            資格：<br>
            中國工業工程師學會　　　　工業工程師及格<br>
            勞動部電腦硬體裝修　　　　乙級<br>
            <hr>
            興趣：<br>
            睡午覺(超過兩小時的那種)、開車兜風(山路尤佳)、機車電系改裝、玩夾娃娃機、打格鬥天王(KOF)、臺灣教育觀察、Arduino<br>
            <hr>
            喜歡的事物：<br>
            <font color='green'><b>綠色</b></font>、老媽送的抱枕、家裡的老電腦、女朋友<br>
            <hr>
            討厭的事物：<br>
            <font color='red'><b>紅色</b></font>、蟑螂、驚嚇、恐怖片、GO語言<br>
            <br>
        </div> -->
@stop