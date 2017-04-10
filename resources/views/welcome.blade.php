@extends('layouts.app')

@section('content')
<div class="ua">
<h3 class="text-center"><b>Федерація Тхеквондо ВТФ України</b></h3>
<br>
    <div class="container-fluid hidden-xs hidden-sm">
        <table class="table tour-list-table">
            <thead>
            <tr>
               <th class="hidden-xs text-center"><div style="padding-left:10px;"></div></th>
                <th class="text-center">Дата</th>
                <th class="text-center">Назва</th>
                <th class="text-center">Місто</th>
                <th class="hidden-xs text-center">Статус</th>
                <th class="hidden-xs text-center"><div style="padding-right:10px;">Ліміт участників</div></th>
            </tr>
            </thead>
            <tbody>
			
			@foreach ($comp as $competition) 
				 <tr class="table-row-0">
			     <td class="hidden-xs" style="text-align: center;">
                 <img style="width:50px" src="{{$competition->logo}}" alt="">
                 </td>
                 <td><nobr>
				
				 	@php
					$date10 = new DateTime($competition->date_from);
					$date20 = new DateTime($competition->date_to);
					echo($date10->format('d.m.Y').' - '.$date20->format('d.m.Y'));
					@endphp
				 </nobr></td>
                 <td> <a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
                 <td>{{$competition->country}}</td>
                 <td class="hidden-xs">
				 @php
				 $date1 = new DateTime($competition->date_from);
				 $date2 = new DateTime($competition->date_to);
				 			 
				 $date_curr = new DateTime('NOW');
				 if ($date_curr < $date1 & $date_curr < $date2)
				 {
					 echo('Заплановано');
				 }
				 else if ($date_curr > $date1 & $date_curr <= $date2)
				 {
					 echo('Проходить');
				 }
				 else
				 {
					 echo('Закінчилось');
				 }
				 @endphp
				 </td>
                 <td class="hidden-xs">{{$competition->limited}}</td>
                  </tr>
			
	@endforeach		
					
 </tbody></table>
</span>
</div>
</div>
<div class="en">
<h3 class="text-center"><b>World Taekwondo Federation, WTF</b></h3>
<br>
    <div class="container-fluid hidden-xs hidden-sm">
        <table class="table tour-list-table">
            <thead>
            <tr>
               <th class="hidden-xs text-center"><div style="padding-left:10px;"></div></th>
                <th class="text-center">Date</th>
                <th class="text-center">Name</th>
                <th class="text-center">Town</th>
                <th class="hidden-xs text-center">Status</th>
                <th class="hidden-xs text-center"><div style="padding-right:10px;">Limit</div></th>
            </tr>
            </thead>
            <tbody>
			
			@foreach ($comp as $competition) 
				 <tr class="table-row-0">
			     <td class="hidden-xs" style="text-align: center;">
                 <img style="width:50px" src="{{$competition->logo}}" alt="">
                 </td>
                 <td><nobr>
				
				 	@php
					$date10 = new DateTime($competition->date_from);
					$date20 = new DateTime($competition->date_to);
					echo($date10->format('d.m.Y').' - '.$date20->format('d.m.Y'));
					@endphp
				 </nobr></td>
                 <td> <a href="/competition/{{$competition->id}}">{{$competition->tourname}}</a></td>
                 <td>{{$competition->country}}</td>
                 <td class="hidden-xs">
				 @php
				 $date1 = new DateTime($competition->date_from);
				 $date2 = new DateTime($competition->date_to);
				 			 
				 $date_curr = new DateTime('NOW');
				 if ($date_curr < $date1 & $date_curr < $date2)
				 {
					 echo('Not started');
				 }
				 else if ($date_curr > $date1 & $date_curr <= $date2)
				 {
					 echo('Continue');
				 }
				 else
				 {
					 echo('End');
				 }
				 @endphp
				 </td>
                 <td class="hidden-xs">{{$competition->limited}}</td>
                  </tr>
			
	@endforeach		
					
 </tbody></table>
</span>
</div>
</div>
@endsection
