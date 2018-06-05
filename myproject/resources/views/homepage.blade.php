@extends('layouts.navbarapp')

@section('title')
    <head>
        <title>首頁</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
@section('content')

    <?//php foreach($homepageimage as $timage):?>    
        <!-- <div class="container">
            <img src="/myproject/storage/app/upload/titleimage/<?//php echo $timage->image; ?>" height="auto" width="auto">
        </div>  -->
    <?//php endforeach; ?>
        <!-- <div class="container">
            @if(Auth::guest())

            @elseif(Auth::user()->email == 'howard396501@gmail.com')
                <form enctype="multipart/form-data" action="profile" method="POST">
                    <label>上傳圖片</label><p>
                    <input type="file" name="image">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"><p>
                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                </form>
            @elseif(Auth::user()->email != 'howard396501@gmail.com')
            @endif
        </div> -->
            
        <div class="container">
        <p>
            <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="https://i.imgur.com/CwuwMXI.jpg" alt="computer" width="1100" height="350"  style="border-radius:5%;">
                </div>
                <div class="carousel-item">
                <img src="https://i.imgur.com/YOgrzlD.jpg" alt="education" width="1100" height="350" style="border-radius:5%;">
                </div>
                <div class="carousel-item">
                <img src="https://i.imgur.com/lwpNOJh.jpg" alt="life" width="1100" height="350" style="border-radius:5%;">
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
            </div>

            <p><!-- 分隔 -->
            <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="https://i.imgur.com/mXanE3u.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>資訊技術</h2>
          <p>瓦特的蒸汽機曾經造成工業革命，當世界開始改變的時候，總是要有人去發掘其中的關鍵點，現在資訊爆炸的年代，資訊技術所擁有的，就是改變世界的力量。</p>
          <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#information">View details &raquo;</a></p>
          
          <div class="modal fade" id="information">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Computer Technique</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  開發中...
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
        
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="https://i.imgur.com/IGrTRjY.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>教育時事</h2>
          <p>十年樹木、百年樹人，教育乃國家之根本，受教乃國民之義務，但同時，也必須思考教育帶給我們什麼，教育要傳達何種核心價值。</p>
          <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#education">View details &raquo;</a></p>
          
          <div class="modal fade" id="education">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Education</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  開發中...
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
        
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" src="https://i.imgur.com/571XZKc.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>生活閒聊</h2>
          <p>人生如戲、戲如人生；要把戲演好，除了演員之外，導演也格外重要，我們能掌握的一直都不是人生的長度，而是其中的寬度，做完演員兼導演的我們，在這過程中，忠實記錄著人生中每道酸甜苦辣。</p>
          <p><a class="btn btn-secondary" href="#" role="button" data-toggle="modal" data-target="#life">View details &raquo;</a></p>
          
          <div class="modal fade" id="life">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Life and Love</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  開發中...
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
                
              </div>
            </div>
          </div>
        
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Arduino系列教學 <span class="text-muted"><p>開啟你的創客靈魂</span></h2>
          <p class="lead">創意這個名詞不再是藝術設計系學生的專利，電機電子工程類科的學生也有機會一展自己的創意，擔任過國立中正大學資訊工程學研究所助教的版主來激發你的創意潛能。</p>
          
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="https://i.imgur.com/npHYjOE.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="https://i.imgur.com/xTPDSlN.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading">時事思辨<span class="text-muted"><p>尋求體制外的解套辦法</span></h2>
          <p class="lead">「風聲雨聲讀書聲聲聲入耳，家事國事天下事事事關心」，除了本職學能外，關心社會是每個世界公民的義務，思考每道社會問題背後的意義。</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">人生痕跡<span class="text-muted"><p>凡走過，必留下痕跡</span></h2>
          <p class="lead">有時候或許你會怨嘆自己不順遂，但事實上這次的經歷都會對你的未來產生影響，我曾怨嘆過，但並不想一直怨天尤人，偶爾寫寫心情小語，記錄當時留下的印記。</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="https://i.imgur.com/daTaJ78.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

            
        </div>
@stop