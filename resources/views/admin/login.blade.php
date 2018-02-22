@extends('layouts.loginlayout')
@section('content')


<div class="container">
  <div class="siteIcon"><img src="{{asset('images/face/15.png')}}" alt="" data-toggle="tooltip" data-placement="top" title="Welcome to PeiC cms demo" draggable="false" /></div>
  <form action="" method="post" autocomplete="off" class="form-signin" style="border: solid 2px black;border-radius:8px;">
    {{csrf_field()}}
    <h2 class="form-signin-heading">Admin Login</h2>
    @if(session('msg'))
    <p style="background-color:red;display:inline-blick;color:white;margin-bottom:10px">{{session('msg')}}</p>
    @endif
    <label for="userName" class="sr-only">User Name</label>
    <input type="text" id="userName" name="username" class="form-control" placeholder="User Name" required autofocus autocomplete="off" maxlength="10">
    <label for="userPwd" class="sr-only">Passwrod</label>
    <input type="password" id="userPwd" name="userpwd" class="form-control" placeholder="Password" required autocomplete="off" maxlength="18">
    <a href=""><button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">Submit</button></a>
  </form>
  <div class="footer">
    <!-- <p><a href="" data-toggle="tooltip" data-placement="right">Powered by PeiChen</a></p> -->

  </div>
</div>

<!--<script>
$('[data-toggle="tooltip"]').tooltip();
window.oncontextmenu = function(){
	//return false;
};
$('.siteIcon img').click(function(){
	window.location.reload();
});
$('#signinSubmit').click(function(){
	if($('#userName').val() === ''){
		$(this).text('用户名不能为空');
	}else if($('#userPwd').val() === ''){
		$(this).text('密码不能为空');
	}else{
		$(this).text('请稍后...');
	}
});
</script>-->
@endsection
