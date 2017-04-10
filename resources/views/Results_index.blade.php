@extends('layouts.app')

@section('content')
<div class="ua">
 <div class="container">
        <div class="row">
            <h4 class="text-center">Результати</h4>
			<h3 class="text-center">Перші місця у своїх вагових категоріях зайняли<br><img src="../../img/gold.png" style="width:40px;"></h3>
			<center><ul class="list-group" >
			@foreach ($g_sportsmans as $sportsman)
			<li class="list-group-item" style="width:150px;">{{$sportsman->surname}} {{$sportsman->name}}</li>
			@endforeach
			</ul><br>
			
			<h3 class="text-center"> Другі місця у своїх вагових категоріях зайняли<br><img src="../../img/silver.png" style="width:40px;"></h3>
			<ul class="list-group">
			@foreach ($s_sportsmans as $sportsman)
			<li class="list-group-item" style="width:150px;">{{$sportsman->surname}} {{$sportsman->name}}</li>
			@endforeach
			</ul><br>
			
			<h3 class="text-center"> Треті місця у своїх вагових категоріях зайняли <br><img src="../../img/bronze.png" style="width:40px;"></h3>
			<ul class="list-group">
			@foreach ($b_sportsmans as $sportsman)
			<li class="list-group-item" style="width:150px;">{{$sportsman->surname}} {{$sportsman->name}}</li>
			@endforeach
			</ul><br></center>
			
        </div>
		<br>
        <div class="col-sm-6" style="margin-left:auto; margin-right:auto;">
		@php
		echo(htmlspecialchars_decode($competition->results));
		@endphp
           
        </div>
    </div>
</div>

<div class="en">
 <div class="container">
        <div class="row">
            <h4 class="text-center">Results</h4>
        </div>
		<br>
        <div class="col-sm-6" style="margin-left:auto; margin-right:auto;">
		@php
		echo(htmlspecialchars_decode($competition->results));
		@endphp
           
        </div>
    </div>
</div>
@endsection