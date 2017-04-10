@extends('layouts.app')

@section('content')
<div class="ua">
<title>Перелік тренерів</title>
        <div class="row">
            <div class="col-xs-12 ">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Перелік тренерів</h4>
            </div>
        </div>

    <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Фото: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Фото <span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.Б.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">П.І.Б. <span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Організація: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Організація<span class="caret hidden-xs"></span></div></th>
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
<title>Trainer list</title>
        <div class="row">
            <div class="col-xs-12 ">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Trainer list</h4>
            </div>
        </div>

    <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Фото: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Foto<span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.Б.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Full name<span class="caret hidden-xs"></span></div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Організація: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Organization<span class="caret hidden-xs"></span></div></th>
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