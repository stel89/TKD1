@extends('layouts.app')

@section('content')
<div class="ua">
  <div class="row">
        <div class="text-center text-uppercase">
            <h4 class="gray">{{Auth::user()->role}}</h4>
        </div>

    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container ">
        <div class="row text-center center-block">
            <a href="/add_sportsman" class="btn btn-lg btn-success trainer-nav">Додати спортсмена</a>
            <a href="/make_competition" class="btn btn-lg btn-info trainer-nav">Додати змагання</a>
            <a href="/make_training" class="btn btn-lg btn-warning trainer-nav">Тренувальний збір</a>
            <a href="/make_pumce" class="btn btn-lg btn-primary trainer-nav phumse_button">Пумсе</a>
            <a href="/make_seminar" class="btn btn-lg btn-danger trainer-nav">Семінар</a>
        </div>
		@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif
    </div>
<div class="container">
        <hr>
    </div>
    <title>{{Auth::user()->surname}} {{Auth::user()->name}}</title>
            <div class="row">
            <div class="text-center text-uppercase">
                <h4 class="gray">{{Auth::user()->surname}} {{Auth::user()->name}}</h4>
            </div>

        </div>
        <div class="container">
            <hr>
        </div>
    
    <style>
        .trainer-icon{
            width:100%;
        }
        @media (min-width:992px){
            .left-part{
                border-right:1px solid #eee;
            }
        }
        .form-group p, .form-group a{
            margin-top:7px;
        }
        @media (max-width:991px){
            #regComplete{
                width:100% !important;
            }
        }
    </style>
    
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                <img id="trainer_logo" class="trainer-icon text-center center-block img-rounded" src="{{Auth::user()->avatar}}" alt=""><br>
				<center><a href="profile/{{Auth::user()->id}}/edit" class="btn btn-lg btn-default trainer-nav" style="margin:left:10%;">Редагувати профіль</a></center>
            </div>
			 
            <div class="col-xs-4 sp-name-block">
                <h1 class="sp-name ">{{Auth::user()->surname}} {{Auth::user()->name}}</h1>
                <div class="form-group">
                    <p class="gray">{{Auth::user()->town}}</p>
                    <p class="gray"><a href="#">{{Auth::user()->org}}</a></p>
                    <p class="gray">{{Auth::user()->fst}}</p>
					@if (Auth::user()->role == 'Продавець')
					<p class="gray">{{Auth::user()->patronymic}}</p>
				@endif
                </div>
            </div>
			
        </div>
    </div>

    <div class="container hidden-lg hidden-md hidden-sm">
        <div class="row">
            <div class="col-xs-6">
                <img style="width: calc(100% + 10px);" class="text-center center-block img-rounded" src="{{Auth::user()->avatar}}" alt="">
            </div>
            <div class="col-xs-6 mysmall">
                <h4 class="sp-name"><b>{{Auth::user()->surname}}</b></h4>
                <h4 class="sp-name"><b>{{Auth::user()->name}}</b></h4>
                <p class="sp-paragraphorg"><a href="#">{{Auth::user()->town}},<br>{{Auth::user()->org}}</a></p>
            </div>
        </div>
    </div>
    <br>
@if (Auth::user()->role == 'Тренер')
    <div class="container">

        <div class="row">
            <div class="col-xs-12 ">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Моя команда</h4>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Прізвище: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Прізвище <span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Ім&#39;я: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Ім'я <span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Рік: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Рік<span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Стать: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Стать<span class="caret hidden-xs"></span></div></th>
		<th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Стать: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Дія<span class="caret hidden-xs"></span></div></th>
		<th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Стать: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Дія<span class="caret hidden-xs"></span></div></th>
	</tr>
    </thead>
	<script>
	function ask() {
   return confirm("Дійсно видалити спортсмена?")
} 
</script>

     <tbody aria-live="polite" aria-relevant="all">
	 @foreach ($sportsmans as $sportsman)
                <tr role="row">
				
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->surname}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->name}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->birthday}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->sex}}</a></td>
				<td><button class="btn btn-default" onclick="location.href = '/sportsman/{{$sportsman->id}}/edit';">Змінити</button></td>
				<td>
				<form method="POST" onsubmit="return ask();" action="{{action('SportsmenController@destroy',[$sportsman->id])}}">
				<input type="hidden" name="_method" value="delete"/>
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<input type="submit" class="btn btn-danger"  value="Видалити"/>
				</form>
				</td>
            </tr>
		@endforeach	                    
                </tbody>
    </table>
    </div>
    </div>
	@endif
    <script src="../../js/jquery.tablesorter.js"></script>
    <script>
        $(document).ready(function(){
            $(function(){
                $("#mytable").tablesorter();
            });
        });
    </script>
    <script></script>
	</div>
	
	<div class="en">
  <div class="row">
        <div class="text-center text-uppercase">
            <h4 class="gray">{{Auth::user()->role}}</h4>
        </div>

    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container ">
        <div class="row text-center center-block">
            <a href="/add_sportsman" class="btn btn-lg btn-success trainer-nav">Add sportsman</a>
            <a href="/make_competition" class="btn btn-lg btn-info trainer-nav">Add competition</a>
            <a href="/make_training" class="btn btn-lg btn-warning trainer-nav">Training camp</a>
            <a href="/make_pumce" class="btn btn-lg btn-primary trainer-nav phumse_button">Pumse</a>
            <a href="/make_seminar" class="btn btn-lg btn-danger trainer-nav">Seminar</a>
        </div>
		@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif
    </div>
<div class="container">
        <hr>
    </div>
    <title>{{Auth::user()->surname}} {{Auth::user()->name}}</title>
            <div class="row">
            <div class="text-center text-uppercase">
                <h4 class="gray">{{Auth::user()->surname}} {{Auth::user()->name}}</h4>
            </div>

        </div>
        <div class="container">
            <hr>
        </div>
    
    <style>
        .trainer-icon{
            width:100%;
        }
        @media (min-width:992px){
            .left-part{
                border-right:1px solid #eee;
            }
        }
        .form-group p, .form-group a{
            margin-top:7px;
        }
        @media (max-width:991px){
            #regComplete{
                width:100% !important;
            }
        }
    </style>
    
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                <img id="trainer_logo" class="trainer-icon text-center center-block img-rounded" src="{{Auth::user()->avatar}}" alt=""><br>
				<center><a href="profile/{{Auth::user()->id}}/edit" class="btn btn-lg btn-default trainer-nav" style="margin:left:10%;">Edit profile</a></center>
            </div>
			 
            <div class="col-xs-4 sp-name-block">
                <h1 class="sp-name ">{{Auth::user()->surname}} {{Auth::user()->name}}</h1>
                <div class="form-group">
                    <p class="gray">{{Auth::user()->town}}</p>
                    <p class="gray"><a href="#">{{Auth::user()->org}}</a></p>
                    <p class="gray">{{Auth::user()->fst}}</p>
					@if (Auth::user()->role == 'Продавець')
					<p class="gray">{{Auth::user()->patronymic}}</p>
				@endif
                </div>
            </div>
			
        </div>
    </div>

    <div class="container hidden-lg hidden-md hidden-sm">
        <div class="row">
            <div class="col-xs-6">
                <img style="width: calc(100% + 10px);" class="text-center center-block img-rounded" src="{{Auth::user()->avatar}}" alt="">
            </div>
            <div class="col-xs-6 mysmall">
                <h4 class="sp-name"><b>{{Auth::user()->surname}}</b></h4>
                <h4 class="sp-name"><b>{{Auth::user()->name}}</b></h4>
                <p class="sp-paragraphorg"><a href="#">{{Auth::user()->town}},<br>{{Auth::user()->org}}</a></p>
            </div>
        </div>
    </div>
    <br>
@if (Auth::user()->role == 'Тренер')
    <div class="container">

        <div class="row">
            <div class="col-xs-12 ">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">My Team</h4>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Прізвище: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Surname<span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Ім&#39;я: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Name<span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Рік: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Year<span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Стать: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Gender<span class="caret hidden-xs"></span></div></th>
		<th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Стать: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Action<span class="caret hidden-xs"></span></div></th>
		<th style="user-select: none;" data-column="3" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Стать: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Action<span class="caret hidden-xs"></span></div></th>
	</tr>
    </thead>
	<script>
	function ask1() {
   return confirm("Delete sportsman?")
} 
</script>

     <tbody aria-live="polite" aria-relevant="all">
	 @foreach ($sportsmans as $sportsman)
                <tr role="row">
				
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->surname}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->name}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->birthday}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->sex}}</a></td>
				<td><button class="btn btn-default" onclick="location.href = '/sportsman/{{$sportsman->id}}/edit';">Change</button></td>
				<td>
				<form method="POST" onsubmit="return ask1();" action="{{action('SportsmenController@destroy',[$sportsman->id])}}">
				<input type="hidden" name="_method" value="delete"/>
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				<input type="submit" class="btn btn-danger"  value="Delete"/>
				</form>
				</td>
            </tr>
		@endforeach	                    
                </tbody>
    </table>
    </div>
    </div>
	@endif
    <script src="../../js/jquery.tablesorter.js"></script>
    <script>
        $(document).ready(function(){
            $(function(){
                $("#mytable").tablesorter();
            });
        });
    </script>
    <script></script>
	</div>
 @endsection   