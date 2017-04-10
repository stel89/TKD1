<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="http://mytkd.in.ua/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#36648B">
    <meta name="description" content="Easy tournaments">
    <meta name="keywords" content="онлайн, соревнование, пумсэ, phumse, kerugi, керуги, легкие, соревнования, тхеквандо, mytkd, Травеньткд, Травень ткд">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<script src="../../js/jquery.min.js"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/tournaments.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.cookie.js"></script>
    <script src="../../js/canvasjs.min.js"></script>
	    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script>
     /*   $(document).ready(function() {
            $("html").niceScroll({horizrailenabled:false});
        });*/
    </script>

</head>

<body style="display:block;"><div class="bg-wrapper"></div>
<script>
$(document).ready(function(){

	var lang = $.cookie("lang");
	if( lang == 'ua')
	{
		$('.en').css("display", "none");
		$('.ua').css("display", "block");
	}
	else if (lang == null)
	{
		$('.en').css("display", "none");
		$('.ua').css("display", "block");
	}
	else if (lang == 'en')
	{
		$('.en').css("display", "block");
		$('.ua').css("display", "none");
	}

	
	$('#en').click(function()
	{
		$('.en').css("display", "block");
		$('.ua').css("display", "none");
		$.cookie("lang","en", {expires: 30});		
	});
	
		$('#ua').click(function()
	{
		$('.en').css("display", "none");
		$('.ua').css("display", "block");	
		$.cookie("lang","ua", {expires: 30});	
	});
	
	$('#en1').click(function()
	{
		$('.en').css("display", "block");
		$('.ua').css("display", "none");
		$.cookie("lang","en", {expires: 30});		
	});
	
		$('#ua1').click(function()
	{
		$('.en').css("display", "none");
		$('.ua').css("display", "block");	
		$.cookie("lang","ua", {expires: 30});	
	});
	});
</script>

<!-- *********************************************************************************************************************
									Украинский
******************************************************************************************************************************
-->
<div class="ua">
<div class="container-fluid">
    <nav id="header" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a id="burger" class=" navbar-toggle " data-toggle="collapse" data-target="#navbar-collapsed">
                <div class="bun top"></div>
                <div class="filling"></div>
                <div class="bun bottom"></div>
            </a>
            <a class="navbar-brand hidden-xs" href="/" style="font-size:2.5em;"><span class="glyphicon glyphicon-th-list"></span></a>
            <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="/" style="margin-top:-5px; font-size:2em;"><span class="glyphicon glyphicon-th-list   "></span></a>
            <form action="#" method="post" class="pull-left" enctype="multipart/form-data" id="language">
                <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle " style="margin-top:-5px;" data-toggle="dropdown">
                        <a class="language-link">УКР</a>
                        <!--  <span style="color: #fff;" class="h5" ></span> --><i class="caret"></i></button>
                    <ul class="dropdown-menu" style="min-width:60px; max-width: 60px; !important; overflow-x:hidden;">
                                                    <li><img style="width:20px; margin-left:20px; cursor:pointer;" src="../../img/ua.png" alt="Українська" title="Українська" id="ua" style=" cursor: pointer;"></li>
                                                    <li><img style="width:20px; margin-left:20px; cursor:pointer;" src="../../img/en.png" alt="English" title="English" id="en" style =" cursor: pointer;"></li>
                                            </ul>
                </div>
                <input type="hidden" id="language_code" name="language_code" value="">
            </form>
            <!-- <a style="position:relative; top:8px;" class="hidden-lg hidden-md hidden-sm" href="" ><span class="glyphicon glyphicon-stats   " style="font-size:30px;" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;

          -->  <a style="position:relative; top:7px; color:#98989a;" class="header-link hidden-lg hidden-md hidden-sm" href="/search"><span class="glyphicon glyphicon-search    " style="font-size:26px;" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;
            <a style="position:relative; top:10px; color: #98989a;" class="header-link hidden-lg hidden-md hidden-sm" href="/contact_us"><span class="glyphicon glyphicon-envelope   " style="font-size:31px;" aria-hidden="true"></span></a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--  <div class="hidden-lg hidden-md hidden-sm  navbar-nav navbar-right">
                   </div>
          -->
<!-- Для тех кто не залогинился-->
   @if (Auth::guest())
        <div class="collapse navbar-collapse" id="navbar-collapsed">

                            <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="http://mytkd.in.ua/shop" class=" "><span class="fa fa-shopping-cart text-danger" style="font-size:38px;"></span></a></li>
                    <li class="hidden-sm hidden-lg hidden-md"><a href="http://mytkd.in.ua/shop">Магазин</a></li>
                    <li class="hidden-sm hidden-lg hidden-md"><a href="/registration">Реєстрація</a></li>
                    <li class="hidden-xs"><a href="/registration"><span class="glyphicon glyphicon-edit   " style="font-size:36px;"></span></a></li>
                </ul>
                <form class="navbar-form header_sign_in" method="post" action="/login">
				  {{ csrf_field() }}
                    <h4 class="hidden-sm hidden-lg hidden-md">Увійти</h4>
                    <input type="email" id="login_input" name="login" class="form-control" placeholder="Логін(пошта)" value="" required="">
                    <button id="sign_in" type="submit" class="btn hidden-xs hidden-sm"><!--<img  src="../assets/icons/logo.png" alt="">--></button>
                    <input type="password" id="password_input" name="password" class="form-control" placeholder="Пароль" required="" value="">
                    <button id="sign_in2" type="submit" style="width:100px" class="btn btn-info hidden-md hidden-lg">Увійти</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="/ranking"><span class="glyphicon glyphicon-stats  hidden-xs" style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Рейтинг</span></a></li>
                    <li> <a href="/search"><span class="glyphicon glyphicon-search  hidden-xs" style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Пошук</span></a></li>
                    <li> <a href="/contact_us"><span class="glyphicon glyphicon-envelope  hidden-xs" style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Зв'язок з нами</span></a></li>
                </ul>
				</div><!-- /.navbar-collapse -->
<!-- А теперь для тех кто залогинился-->		
     @else
	        <div class="collapse navbar-collapse" id="navbar-collapsed">

                            <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="http://mytkd.in.ua/shop" class=" "><span class="fa fa-shopping-cart text-danger" style="font-size:38px;"></span></a></li>
                    <li class="hidden-sm hidden-lg hidden-md"><a href="http://mytkd.in.ua/shop">Магазин</a></li>
                </ul>

                    <div class="header-user-info">
                    <br class="hidden-lg hidden-sm hidden-md">
                    <a href="/profile" class="navbar-text left color-black">{{ Auth::user()->surname }}</a>
                    <a class="hidden-sm hidden-xs" href="/profile" id="header_circle"><img src="{{ Auth::user()->avatar }}" alt="" style="width:135px; height:135px;"></a>
                    <p style="font-size:16px;" class="navbar-text right color-black"><span>{{ Auth::user()->name }}</span></p>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="/ranking"><span class="glyphicon glyphicon-stats hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg"> Рейтинг</span></a></li>
                    <li> <a href="/search"><span class="glyphicon glyphicon-search  hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg"> Пошук</span></a></li>
                    <li> <a href="/contact_us"><span class="glyphicon glyphicon-envelope  hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Зв'язок з нами</span></a></li>
                                            <li><a href="/profile"><span class="glyphicon glyphicon-cog header-config hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Мій профіль</span></a></li>
                                        <li><a href="/logout" class="  " style="font-size:36px;"><span class="glyphicon glyphicon-off   "></span></a></li>
                </ul>
        </div><!-- /.navbar-collapse -->
@endif
<!-- Дальше продолжаем нормально-->		 

        

    </nav>
								  @if(Session::has('error'))
									  <div style="text-align:center;">
						  <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
							<li class="list-group-item list-group-item-danger">{{Session::get('error')}}</li>
							</ul>
							</div>
				      @endif
</div>
</div>

<div class="en">
	<div class="container-fluid">
    <nav id="header" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a id="burger" class=" navbar-toggle " data-toggle="collapse" data-target="#navbar-collapsed">
                <div class="bun top"></div>
                <div class="filling"></div>
                <div class="bun bottom"></div>
            </a>
            <a class="navbar-brand hidden-xs" href="/" style="font-size:2.5em;"><span class="glyphicon glyphicon-th-list"></span></a>
            <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="/" style="margin-top:-5px; font-size:2em;"><span class="glyphicon glyphicon-th-list   "></span></a>
            <form action="#" method="post" class="pull-left" enctype="multipart/form-data" id="language">
                <div class="btn-group">
                    <button class="btn btn-link dropdown-toggle " style="margin-top:-5px;" data-toggle="dropdown">
                        <a class="language-link">ENG</a>
                        <!--  <span style="color: #fff;" class="h5" ></span> --><i class="caret"></i></button>
                    <ul class="dropdown-menu" style="min-width:60px; max-width: 60px; !important; overflow-x:hidden;">
                                                    <li><img style="width:20px; margin-left:20px; cursor:pointer;" src="../../img/ua.png" alt="Українська" title="Українська" id="ua1" style=" cursor: pointer;"></li>
                                                    <li><img style="width:20px; margin-left:20px; cursor:pointer;" src="../../img/en.png" alt="English" title="English" id="en1" style =" cursor: pointer;"></li>
                                            </ul>
                </div>
            </form>
            <!-- <a style="position:relative; top:8px;" class="hidden-lg hidden-md hidden-sm" href="" ><span class="glyphicon glyphicon-stats   " style="font-size:30px;" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;

          -->  <a style="position:relative; top:7px; color:#98989a;" class="header-link hidden-lg hidden-md hidden-sm" href="/search"><span class="glyphicon glyphicon-search    " style="font-size:26px;" aria-hidden="true"></span></a>&nbsp;&nbsp;&nbsp;
            <a style="position:relative; top:10px; color: #98989a;" class="header-link hidden-lg hidden-md hidden-sm" href="/contact_us"><span class="glyphicon glyphicon-envelope   " style="font-size:31px;" aria-hidden="true"></span></a>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--  <div class="hidden-lg hidden-md hidden-sm  navbar-nav navbar-right">
                   </div>
          -->
<!-- Для тех кто не залогинился-->
   @if (Auth::guest())
        <div class="collapse navbar-collapse" id="navbar-collapsed">

                            <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="http://mytkd.in.ua/shop" class=" "><span class="fa fa-shopping-cart text-danger" style="font-size:38px;"></span></a></li>
                    <li class="hidden-sm hidden-lg hidden-md"><a href="http://mytkd.in.ua/shop">Shop</a></li>
                    <li class="hidden-sm hidden-lg hidden-md"><a href="/registration">Registration</a></li>
                    <li class="hidden-xs"><a href="/registration"><span class="glyphicon glyphicon-edit   " style="font-size:36px;"></span></a></li>
                </ul>
                <form class="navbar-form header_sign_in" method="post" action="/login">
				  {{ csrf_field() }}
                    <h4 class="hidden-sm hidden-lg hidden-md">Enter</h4>
                    <input type="email" id="login_input" name="login" class="form-control" placeholder="Login(email)" value="" required="">
                    <button id="sign_in" type="submit" class="btn hidden-xs hidden-sm"><!--<img  src="../assets/icons/logo.png" alt="">--></button>
                    <input type="password" id="password_input" name="password" class="form-control" placeholder="Password" required="" value="">
                    <button id="sign_in2" type="submit" style="width:100px" class="btn btn-info hidden-md hidden-lg">Enter</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="/ranking"><span class="glyphicon glyphicon-stats  hidden-xs" style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Ranking</span></a></li>
                    <li> <a href="/search"><span class="glyphicon glyphicon-search  hidden-xs" style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Search</span></a></li>
                    <li> <a href="/contact_us"><span class="glyphicon glyphicon-envelope  hidden-xs" style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Contact us</span></a></li>
                </ul>
				</div><!-- /.navbar-collapse -->
<!-- А теперь для тех кто залогинился-->		
     @else
	        <div class="collapse navbar-collapse" id="navbar-collapsed">

                            <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="http://mytkd.in.ua/shop" class=" "><span class="fa fa-shopping-cart text-danger" style="font-size:38px;"></span></a></li>
                    <li class="hidden-sm hidden-lg hidden-md"><a href="http://mytkd.in.ua/shop">Shop</a></li>
                </ul>

                    <div class="header-user-info">
                    <br class="hidden-lg hidden-sm hidden-md">
                    <a href="/profile" class="navbar-text left color-black">{{ Auth::user()->surname }}</a>
                    <a class="hidden-sm hidden-xs" href="/profile" id="header_circle"><img src="{{ Auth::user()->avatar }}" alt="" style="width:135px; height:135px;"></a>
                    <p style="font-size:16px;" class="navbar-text right color-black"><span>{{ Auth::user()->name }}</span></p>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li> <a href="/ranking"><span class="glyphicon glyphicon-stats hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Ranking</span></a></li>
                    <li> <a href="/search"><span class="glyphicon glyphicon-search  hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Search</span></a></li>
                    <li> <a href="/contact_us"><span class="glyphicon glyphicon-envelope  hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">Contact us</span></a></li>
                                            <li><a href="/profile"><span class="glyphicon glyphicon-cog header-config hidden-xs " style="font-size:36px;" aria-hidden="true"></span><span style="" class=" hidden-sm hidden-md hidden-lg">My profile</span></a></li>
                                        <li><a href="/logout" class="  " style="font-size:36px;"><span class="glyphicon glyphicon-off   "></span></a></li>
                </ul>
        </div><!-- /.navbar-collapse -->
@endif
<!-- Дальше продолжаем нормально-->		 

        

    </nav>
								  @if(Session::has('error'))
									  <div style="text-align:center;">
						  <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
							<li class="list-group-item list-group-item-danger">{{Session::get('error')}}</li>
							</ul>
							</div>
				      @endif
</div>
</div>

@yield('content')

<div class="ua">
 <div class="container">
    <div class="row text-center">
    <br>
        <a href="http://mytkd.in.ua/"><img src="../../img/logo-black.png" class="footer-image"></a>
    </div>
</div>
<div class="container">
    <hr class="footer-divider">
</div>
<div class="container">
    <ul class="list-group list-inline text-center">
        <li><a href="http://mytkd.in.ua/files/Sistema_Provedenia_Sorevnovany_MyTkd.pdf" target="_blank"><span class="glyphicon glyphicon-file"></span>О нас</a></li>
        <li><a href="http://mytkd.in.ua/files/Registratsia_Trenera_Komandy.pdf" target="_blank"><span class="glyphicon glyphicon-file"></span>Допомога</a></li>
        <li><a href="http://mytkd.in.ua/tournaments/#">Реклама</a></li>
        <li><a href="/contact_us"><span class="glyphicon glyphicon-envelope"></span> Напишіть нам</a></li>
    </ul>
</div>

<script src="../../js/jquery.nicescroll.min.js"></script>

</div>
   
<div class="en">
 <div class="container">
    <div class="row text-center">
    <br>
        <a href="/"><img src="../../img/logo-black.png" class="footer-image"></a>
    </div>
</div>
<div class="container">
    <hr class="footer-divider">
</div>
<div class="container">
    <ul class="list-group list-inline text-center">
        <li><a href="http://mytkd.in.ua/files/Sistema_Provedenia_Sorevnovany_MyTkd.pdf" target="_blank"><span class="glyphicon glyphicon-file"></span>About us</a></li>
        <li><a href="http://mytkd.in.ua/files/Registratsia_Trenera_Komandy.pdf" target="_blank"><span class="glyphicon glyphicon-file"></span>Help</a></li>
        <li><a href="http://mytkd.in.ua/tournaments/#">Adversting</a></li>
        <li><a href="/contact_us"><span class="glyphicon glyphicon-envelope"></span>Contact us</a></li>
    </ul>
</div>

	</div>
</body>
</html>
