@extends('layouts.app')

@section('content')
<div class="ua">
 <title>{{$user->surname}} {{$user->name}}</title>
        <div class="container hidden-xs">
            <div class="row" style="text-align:center;">   
			
				@if ($user->avatar == '' or $user->avatar == '')
					
				@else
				<div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                    <img id="trainer_logo" class="trainer-icon text-center center-block img-rounded" src="{{$user->avatar}}" alt="" style="margin-left:50%;">
                </div>
				@endif
				<div class="col-xs-4 sp-name-block" style="margin-left:33%;">
                    <input type="hidden" name="value=&quot;4288&quot;">
                    <h1 class="sp-name ">{{$user->surname}} {{$user->name}}</h1>
                    <div class="form-group">
                        <h4 class="gray">Рік народження: <font color="black">{{$user->birthday}}</font></h4>
                        <p class="gray">Тренер: <font color="black">{{$user->trainer_one}}</font></p>
                        
                        <p class="gray">Розряд: <font color="black">{{$user->rang}}</font></p>
                        <p class="gray">Гип/Дан: <font color="black">{{$user->dan}}</font></p>

                                                <div class="clearfix"></div>
                                                
                                            </div>
                </div>
            
        </div>
        <div class="container hidden-lg hidden-md hidden-sm">
            <div class="row">
				@if ($user->avatar == '' or $user->avatar == '')
					
				@else
                <div class="col-xs-6">
                    <img style="width: calc(100% + 10px);" class="text-center center-block img-rounded" src="{{$user->avatar}}" alt="">
                </div>
				@endif
                <div class="col-xs-6 mysmall">
                    <h4 class="sp-name "><b>{{$user->surname}}</b></h4>
                    <h4 class="sp-name f"><b>{{$user->name}}</b></h4>
                    <p class="sp-paragraph"><b>{{$user->birthday}} р.н.</b></p>

                    <p class="gray paragraphorg"><span>Тренер: {{$user->trainer_one}}</span></p>

                                    </div>
            </div>

                    </div>
					
					
					  <div class="row">
            <div class="col-xs-8" style="margin-left:auto !important; margin-right:auto !important; float:none !important;">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Приймав(ла) або приймаэ участь у змаганнях:</h4>
            
       
<table class="table" style="text-align:center;">
<thead> <tr>
<th style="text-align:center;">№</th>
<th style="text-align:center;">Назва змагання</th>
</tr></thead>
<tbody>
@php $i=1; @endphp
@foreach ($all as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td>{{$competition->tourname}}</td>
</tr>
@php $i++; @endphp
@endforeach
</tbody></table>
    </div>
    </div>
 <div class="row">
 <div class="col-xs-8" style="margin-left:auto !important; margin-right:auto !important; float:none !important;">
 <h4 class="grey" style="padding: 5px; border-radius:15px;">Зайняв(ла) призові місця:</h4>
            
       
<table class="table" style="text-align:center;">
<thead> <tr>
<th style="text-align:center;">№</th>
<th style="text-align:center;">Назва змагання</th>
<th style="text-align:center;">Місце</th>
</tr></thead>
<tbody>
@php $i=1; @endphp
@foreach ($gold as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td><a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
<td><img src="../../img/gold.png" style="width:55px;"></td>
</tr>
@php $i++; @endphp
@endforeach
@foreach ($silver as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td><a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
<td><img src="../../img/silver.png" style="width:55px;"></td>
</tr>
@php $i++; @endphp
@endforeach
@foreach ($bronze as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td><a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
<td><img src="../../img/bronze.png" style="width:55px;"></td>
</tr>
@php $i++; @endphp
@endforeach
</tbody></table>
    </div>
    </div>
	
</div>
</div>					


<div class="en">
 <title>{{$user->surname}} {{$user->name}}</title>
        <div class="container hidden-xs">
            <div class="row" style="text-align:center;">    
			
				@if ($user->avatar == '' or $user->avatar == '')
					
				@else
				<div class="col-xs-4 col-md-4 col-md-offset-2 col-sm-offset-2">
                    <img id="trainer_logo" class="trainer-icon text-center center-block img-rounded" src="{{$user->avatar}}" alt="" style="margin-left:50%;">
                </div>
				@endif
				<div class="col-xs-4 sp-name-block" style="margin-left:33%;">
                    <input type="hidden" name="value=&quot;4288&quot;">
                    <h1 class="sp-name ">{{$user->surname}} {{$user->name}}</h1>
                    <div class="form-group">
                        <h4 class="gray">Birthday: <font color="black">{{$user->birthday}}</font></h4>
                        <p class="gray">Coach: <font color="black">{{$user->trainer_one}}</font></p>
                        
                        <p class="gray">Rang: <font color="black">{{$user->rang}}</font></p>
                        <p class="gray">Gip/Dan: <font color="black">{{$user->dan}}</font></p>

                                                <div class="clearfix"></div>
                                                
                                            </div>
                </div>
            </div>
        
        <div class="container hidden-lg hidden-md hidden-sm">
            <div class="row">
				@if ($user->avatar == '' or $user->avatar == '')
					
				@else
                <div class="col-xs-6">
                    <img style="width: calc(100% + 10px);" class="text-center center-block img-rounded" src="{{$user->avatar}}" alt="">
                </div>
				@endif
                <div class="col-xs-6 mysmall">
                    <h4 class="sp-name "><b>{{$user->surname}}</b></h4>
                    <h4 class="sp-name f"><b>{{$user->name}}</b></h4>
                    <p class="sp-paragraph"><b>{{$user->birthday}} р.н.</b></p>

                    <p class="gray paragraphorg"><span>Coach: {{$user->trainer_one}}</span></p>

                                    </div>
            </div>
                    </div>
 <div class="row">
      <div class="col-xs-8" style="margin-left:auto !important; margin-right:auto !important; float:none !important;">
      <h4 class="grey" style="padding: 5px; border-radius:15px;">Participate in:</h4>
            
       
<table class="table" style="text-align:center;">
<thead> <tr>
<th style="text-align:center;">№</th>
<th style="text-align:center;">Title</th>
</tr></thead>
<tbody>
@php $i=1; @endphp
@foreach ($all as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td>{{$competition->tourname}}</td>
</tr>
@php $i++; @endphp
@endforeach
</tbody></table>
    </div>
    </div>
 <div class="row">
 <div class="col-xs-8" style="margin-left:auto !important; margin-right:auto !important; float:none !important;">
 <h4 class="grey" style="padding: 5px; border-radius:15px;">Won prizes:</h4>
            
       
<table class="table" style="text-align:center;">
<thead> <tr>
<th style="text-align:center;">№</th>
<th style="text-align:center;">Title</th>
<th style="text-align:center;">Place</th>
</tr></thead>
<tbody>
@php $i=1; @endphp
@foreach ($gold as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td><a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
<td><img src="../../img/gold.png" style="width:55px;"></td>
</tr>
@php $i++; @endphp
@endforeach
@foreach ($silver as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td><a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
<td><img src="../../img/silver.png" style="width:55px;"></td>
</tr>
@php $i++; @endphp
@endforeach
@foreach ($bronze as $competition)
<tr>
<td><b>{{$i}}</b></td>
<td><a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
<td><img src="../../img/bronze.png" style="width:55px;"></td>
</tr>
@php $i++; @endphp
@endforeach
</tbody></table>
    </div>
    </div>
</div>
</div>


@endsection