<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pei Chen Laravel Project</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin-scripts.js') }}"></script>
<script>

@if(count($errors)>0)
  var msg = "";
  @if(is_object($errors))
  @foreach($errors -> all() as $error)
    msg+="{{$error}}"+"\n";
  @endforeach
  alert(msg);
  @else
  msg = "{{$errors}}";
  alert(msg);
  @endif
@endif
</script>

<!--[if gte IE 9]>
  <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="js/html5shiv.min.js" type="text/javascript"></script>
  <script src="js/respond.min.js" type="text/javascript"></script>
  <script src="js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
  <section class="container-fluid">
    <header>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="">PeiChen-CMS</a> </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">


              <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Session::get('user')['name']}} <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-left">
                  <li><a href="{{url('admin/quit')}}" onClick="if(!confirm('confirm log out ?'))return false;">Log out</a></li>
                  <li><a title="change password" data-toggle="modal" data-target="#seeUserInfo">Reset password</a></li>
                  <!-- <li><a title="view log" data-toggle="modal" data-target="#seeUserLoginlog">Login log</a></li> -->
                </ul>
              </li>
              <!-- <li><a href="{{url('admin/quit')}}" onClick="if(!confirm('是否确认退出？'))return false;">退出登录</a></li> -->
              <li><a data-toggle="modal" data-target="#WeChat">help</a></li>
            </ul>
            <!-- <form action="" method="post" class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input type="text" class="form-control" autocomplete="off" placeholder="键入关键字搜索" maxlength="15">
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit">搜索</button>
                </span> </div>
            </form> -->
          </div>
        </div>
      </nav>
    </header>
    <div class="row">
      <aside class="col-sm-3 col-md-2 col-lg-2 sidebar">
        <ul class="nav nav-sidebar">
          <li id="indexbar"><a href="{{asset('admin/index')}}">OVERVIEW</a></li> <!--working on ways to change active bar with more dynamic ways-->
        </ul>
        <ul class="nav nav-sidebar">
          <li id="articlebar"><a  href="{{url('admin/article')}}" >ARTICLE</a></li>
          <li><a href="">##</a></li>
          <li><a href="">##</a></li>
          <!-- <li><a data-toggle="tooltip" data-placement="bottom" title="网站暂无留言功能">留言</a></li> gives a tooltip with title message when user mouse hover this element -->
        </ul>
        <ul class="nav nav-sidebar">
          <li id="categorybar"><a href="{{url('admin/category')}}" id="categorybar">CATEGORY</a></li>
          <li><a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">##</a>
            <ul class="dropdown-menu" aria-labelledby="otherMenu">
              <li><a href="">LINKS</a></li>
              <li><a data-toggle="modal" data-target="#areDeveloping">RECORDS</a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav nav-sidebar">
          <li><a class="dropdown-toggle" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USER</a>
            <ul class="dropdown-menu" aria-labelledby="userMenu">
              <li><a data-toggle="modal" data-target="#areDeveloping">#</a></li>
              <li><a href="">#</a></li>
              <li role="separator" class="divider">#</li>
              <li><a href="">#</a></li>
            </ul>
          </li>

        </ul>
      </aside>

@yield('content')
@include('layouts.topbar')
</body>
</html>
