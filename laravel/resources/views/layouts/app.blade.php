<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/apps.css') }}" rel="stylesheet">
	<script src="{{ asset('js/App.js') }}"></script>
	<script src="{{ asset('js/apps.js') }}"></script>

</head>
<body >

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" >
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">

						<li id="a" class="col-md col-lg col-xs col-sm "><a href="{{ url('/') }}">صفحه اول</a></li>
						<li id="b" class="col-md col-lg col-xs col-sm" ><a href="{{ route('fregister') }}">صفحه کاربری</a></li>
						
                        <!-- Authentication Links -->
                        @guest
							 <style>#b{background-color:#a8a8a8;}</style>
                            <li id="c"><a href="{{ route('login') }}">ورود</a></li>
                            <li id="d"><a href="{{ route('register') }}">ثبت نام</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            خروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
		@isset($key)
		
			@guest
				<style>@keyframes imo{to{background-color:#ff0101;}}  #d{animation:imo 2s 3.5s ;} 	</style>
			@endguest
			<div class="alert alert-info" role="alert" id="k">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"></span>
				</button>
				<strong></strong> {{ $key }} <br/>
			</div>
			
		@endisset
	<!--header-->
	<div class="banner" style="background-image:url({{asset('pic/index.jpg')}})" >
		<div class="container">
			<div class="banner-info">
				<h1>وب اپلیکیشن های حرفه ای</h1>
				<h2>تفکر حرفه ای</h2>
				<p></p>
				<div class="more">
					<a href="single.html" class="hvr-curl-bottom-right">آینده را بسازید</a>
				</div>
			</div>
		</div>
	</div>
        @yield('content')

	<!-- footer -->
	<div class="footer" id="footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3 class="title">نمونه ها </h3>
					<ul>
						<li><a href="#">computeresefid.info</a></li>
						<li><a href="#">.....</a></li>

					</ul>
				</div>
				<div class="col-md-3 footer-grid ctact-grid">
					<h3 class="title">مطالب مرتبط</h3>
					 <ul>
						<li><a href="#">سایت های دیگه</a></li>
						<li><a href="#">سو</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid ctact-grid">
					<h3 class="title">برنامه نویسی و ب سایت</h3>
					<ul>
						<li><a href="#">شماره تماس</a></li>
						<li><a href="#">ایمل تماس</a></li>						
					</ul>
				</div>
				<div class="col-md-3 footer-grid contact-grid">
						<h3 class="title">ایمیل ها </h3>
						<ul>
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>mailbox4903@gmail.com</li>
							<li class="adrs">mail335@gmail.com</li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>02177543056</li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com">mailf_u33@yahoo.com</a></li>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//footer-->
	

</body>
</html>
