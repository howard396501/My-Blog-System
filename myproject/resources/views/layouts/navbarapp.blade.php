<!DOCTYPE html>
<html>
    @yield('title')
    <body>      
        <nav class="navbar navbar-expand-sm bg-dark fixed-top navbar-dark">
        
            <a class="navbar-brand" href="./homepage">On my way - The past to the future</a>
            <ul class="navbar-nav">
                <li class="navbar-item">
                    <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/about">關於本站</a>
                </li>
            
                <li class="navbar-item">
                    <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/me">版主介紹</a>
                </li>
            
                <li class="navbar-item">
                    <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/blog">網誌</a>
                </li>
            
                <li class="navbar-item">
                    <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/site">實用網站</a>
                </li>
            
                <li class="navbar-item">
                    <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/messageboard">留言板</a>
                </li>

                @if (Auth::guest())
                    <li class="navbar-item">
                        <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/login">登入</a>
                    </li>
                    
                    <li class="navbar-item">
                        <a class="nav-link" href="http://localhost:8080/myproject/public/index.php/register">註冊</a>
                    </li>
                @elseif(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                              <span class="caret"></span>
                              <?php $user=Auth::user(); ?>
                              <img src="/myproject/storage/app/upload/avatars/{{ $user->avatar }}" style="width:32px; height:32px ; position:absolute; top:10px; left:10px; border-radius:50%;">
                              {{ Auth::user()->name }} 
                        </a>

                        <ul class="dropdown-menu" >
                            <li><a href="{{ url('/profile') }}">個人資料</a></li>
                            <li><a href="{{ url('/logout') }}">登出</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        
        </nav>
        <br><br><p>
        @yield('content')
        <!-- <div id="footer">
            <div class="container">
                <p>
                下橫幅開發中
            </div>
        </div> -->
    </body>
</html>