 @extends('layouts.app')

@section('content')
<div class="ua">
 <title>{{$user->surname}}  {{$user->name}}</title>
            <div class="row">
            <div class="text-center text-uppercase">
                <h4 class="gray">{{$user->surname}}  {{$user->name}}</h4>
            </div>

        </div>
        <div class="container">
            <hr>
        </div>
    
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                <img id="trainer_logo" class="trainer-icon text-center center-block img-rounded" src="{{$user->avatar}}" alt="">
            </div>
            <div class="col-xs-4 sp-name-block">
                <h1 class="sp-name ">{{$user->surname}}  {{$user->name}}</h1>
                <div class="form-group">
                    <p class="gray">{{$user->town}}</p>
                    <p class="gray">{{$user->org}}</p>
                    <p class="gray">{{$user->fst}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container hidden-lg hidden-md hidden-sm">
        <div class="row">
            <div class="col-xs-6">
                <img style="width: calc(100% + 10px);" class="text-center center-block img-rounded" src="{{$user->avatar}}" alt="">
            </div>
            <div class="col-xs-6 mysmall">
                <h4 class="sp-name"><b>{{$user->surname}}</b></h4>
                <h4 class="sp-name"><b>{{$user->name}}</b></h4>
                <p class="sp-paragraphorg">{{$user->town}},<br>{{$user->org}}</p>
            </div>
        </div>
    </div>
    <br>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 ">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Команда</h4>
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
    </tr>
    </thead>
        <tbody aria-live="polite" aria-relevant="all">
	 @foreach ($sportsmans as $sportsman)
                <tr role="row">
				
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->surname}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->name}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->birthday}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->sex}}</a></td>
            </tr>
		@endforeach	                    
                </tbody>
    </table>
    </div>
    </div>
</div>

<div class="en">
 <title>{{$user->surname}}  {{$user->name}}</title>
            <div class="row">
            <div class="text-center text-uppercase">
                <h4 class="gray">{{$user->surname}}  {{$user->name}}</h4>
            </div>

        </div>
        <div class="container">
            <hr>
        </div>
    
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                <img id="trainer_logo" class="trainer-icon text-center center-block img-rounded" src="{{$user->avatar}}" alt="">
            </div>
            <div class="col-xs-4 sp-name-block">
                <h1 class="sp-name ">{{$user->surname}}  {{$user->name}}</h1>
                <div class="form-group">
				 <p class="gray">{{$user->role}}</p>
                    <p class="gray">{{$user->town}}</p>
                    <p class="gray">{{$user->org}}</p>
                    <p class="gray">{{$user->fst}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container hidden-lg hidden-md hidden-sm">
        <div class="row">
            <div class="col-xs-6">
                <img style="width: calc(100% + 10px);" class="text-center center-block img-rounded" src="{{$user->avatar}}" alt="">
            </div>
            <div class="col-xs-6 mysmall">
                <h4 class="sp-name"><b>{{$user->surname}}</b></h4>
                <h4 class="sp-name"><b>{{$user->name}}</b></h4>
				<h4 class="sp-name"><b>{{$user->role}}</b></h4>
                <p class="sp-paragraphorg">{{$user->town}},<br>{{$user->org}}</p>
            </div>
        </div>
    </div>
    <br>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 ">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Team</h4>
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
    </tr>
    </thead>
        <tbody aria-live="polite" aria-relevant="all">
	 @foreach ($sportsmans as $sportsman)
                <tr role="row">
				
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->surname}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->name}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->birthday}}</a></td>
                <td><a href="/sportsman/{{$sportsman->id}}">{{$sportsman->sex}}</a></td>
            </tr>
		@endforeach	                    
                </tbody>
    </table>
    </div>
    </div>
</div>
@endsection   