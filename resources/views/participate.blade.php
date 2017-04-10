@extends('layouts.app')

@section('content')

<div class="ua">
<div class="row" style="text-align:center;">
<br>
<h4>Ви {{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronimyc}} збираэтесь прийнти участь у змаганні "{{$competition->tourname}}"<br></h4>
<br>

<br>
<form style="width:25%; margin-left:auto; margin-right:auto; text-align:left;" method="post" action="/competition/{{$competition->id}}/add_sportsmans">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <p class="help-block">Оберіть спорстменів</p>
<ul class="list-group">
 @foreach ($sportsmans as $sportsman)
 <li class="list-group-item">
   
   <input type="checkbox" name="sportsman{{ $loop->iteration }}" value="{{$sportsman->id}}" id="sportsman{{ $loop->iteration }}" name="sportsman{{$sportsman->id}}" >
   <label for="sportsman{{$sportsman->id}}" style="margin-left:20px;">{{$sportsman->surname}} {{$sportsman->name}}</label>
   </li>
@endforeach	  
</ul>
		
  <button type="submit" class="btn btn-default btn-success">Прийняти участь</button>
  </div>
</form>
		
</div>

<div class="en">
<div class="row" style="text-align:center;">
<br>
<h4>You {{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronimyc}} want to paticipate in competition "{{$competition->tourname}}"<br></h4>
<br>

<br>
<form style="width:25%; margin-left:auto; margin-right:auto; text-align:left;" method="post" action="/competition/{{$competition->id}}/add_sportsmans">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
 <p class="help-block">Choose sportsmans</p>
<ul class="list-group">
 @foreach ($sportsmans as $sportsman)
 <li class="list-group-item">
   
   <input type="checkbox" name="sportsman{{ $loop->iteration }}" value="{{$sportsman->id}}" id="sportsman{{ $loop->iteration }}" name="sportsman{{$sportsman->id}}" >
   <label for="sportsman{{$sportsman->id}}" style="margin-left:20px;">{{$sportsman->surname}} {{$sportsman->name}}</label>
   </li>
@endforeach	  
</ul>
		
  <button type="submit" class="btn btn-default btn-success">Participate</button>
  </div>
</form>
		
</div>

@endsection