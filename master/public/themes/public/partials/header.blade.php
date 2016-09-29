<header class="header" >
    <nav class="navbar navbar-default  navbar-fixed-top"  style="position:static;background-color: pink">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="{{trans_url('/')}}"><img src="{{theme_asset('img/logo/logo.svg')}}" alt=""></a> -->
        </div>
        <img src="{{theme_asset('http://aaaa.vn/data/upload_file/Image/hinh-nen/hinh-nen-may-tinh-dep-nhat-2.jpg')}}" style="width:90%;height:350px;position: relative;left: 5%;margin-top: 2%">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: red;width:90%;left: 5%;position: relative; ">
          <ul class="nav navbar-nav navbar-right" style="padding-right: 80px;height:auto;">
            {!!Menu::menu('main')!!}
    @if(!user_check())
            <li><a href="{{trans_url('/login')}}">Login</a></li>
<!--             <li><a href="{{trans_url('/register')}}">Register</a></li> -->
    @endif
          </ul>
        </div>
    @if(user_check())
        <div class="my-account-block">
          <ul>
            <li class="dropdown my-account">
              <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{users('picture')}}" class="img-resopnsive img-circle menu-account-img" alt=""></a>
              <ul class="dropdown-menu">
                <li><a href="{{trans_url('profile')}}"><i class="ion ion-android-person"></i>Profile</a></li>
                <li><a href="{{trans_url('password')}}"><i class="ion ion-android-settings"></i>Settings</a></li>
                <li><a href="{{trans_url('logout')}}"><i class="ion ion-android-exit"></i>Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div>
    @endif
      </div>
    </nav>
</header>
