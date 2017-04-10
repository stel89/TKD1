@extends('layouts.app')

@section('content')
<title>{{$competition->tourname}}</title>
<div class="ua">
  <div class="container">
            <h3 class="text-center">{{$competition->tourname}}  </h3>
            <h4 class="text-center">Проходить з {{$competition->date_from}} по {{$competition->date_to}}</h4>
                    </div>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-xs-12 text-center center-block tournament-button-nav">
                <a href="/competition/{{$competition->id}}" class="btn btn-lg trainer-nav reglament-color">Інформація</a>

                <a href="/competition/{{$competition->id}}/participants" class="btn btn-lg trainer-nav categories-color btn-primary">
				@php
				$part = explode(',', $competition->sportsman_id);
				$count1 = count($part);
				for ($i = 0; $i < $count1; $i++)
				{
				if ($part[$i] =='' or $part[$i] == ' ')	unset($part[$i]);
			
				}
				$part1 = count($part);
				if ($competition->limited <> '' or $competition->limited <> null)
				{
				print "Учасники $part1/$competition->limited</a>";
				}
				else
				{
				print "Учасники ($part1) </a>";	
				}
				@endphp
				<a href="/competition/{{$competition->id}}/judges" class="btn btn-lg trainer-nav live-color btn-warning">Судді 
				@php
				$part = explode(',', $competition->judge_id);
				$count1 = count($part);
				for ($i = 0; $i < $count1; $i++)
				{
				if ($part[$i] =='' or $part[$i] == ' ')	unset($part[$i]);
			
				}
				$part1 = count($part);
				echo('('.$part1.')');
				@endphp
				</a>
				
			
        </div>
        </div>
        <hr>
            </div>
			@if(Session::has('message'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>	
		@endif



    <meta property="og:image" content="../images/tournaments/tour73125509.jpg">    <div class="container" style="overflow:hidden;">
        <h3 class="text-center reglament">Регламент</h3>
        <div class="row">
            <div class="col-sm-8 tournament-info">
                <h5 class="font-gray">Інформація:</h5>
				<p>{{$competition->description}}
                </p>
<br>
<h5 class="font-gray">Програма проведення змагань:</h5><br>
<p>{{$competition->programm}} </p>
                <br>
                 <h5 class="font-gray">Адреса:</h5>
                <p>{{$competition->adress}}</p>
                <br>
                <h5 class="font-gray">Контакти:</h5>
                                <p>{{$competition->contacts}}</p>
                 <br>


                <h5 class="font-gray">Створив:</h5>
                {{$competition->creator}}

            </div>
            <div class="col-md-4 ">
                   <hr class="hidden-lg hidden-md hidden-sm">
                                        <div class="row text-center">
                        <img style="" class="tournament-icon img-rounded " src="{{$competition->logo}}" alt="">
                        <hr width="80%">
                </div>

					@if(Auth::guest())
					
				@else
					@php
					$date_curr = new DateTime('NOW');
					$date2 = new DateTime($competition->date_to);
					@endphp
					@if ($date_curr < $date2)
					
					@if(Auth::user()->role == 'Тренер') 
						
						@php
					
					$part = explode(',', Auth::User()->participation);
					$result = false;
					foreach ($part as $part1)
					{
						$part1 *= 1;
						if ($part1 == $competition->id )
						{
							$result = true;	
						}
					}
					if ($result)
					{
						print "<a href='/competition/$competition->id/quit' class='btn btn-lg btn-danger' style='margin-left:100px;'>Знятися з змагання</a>";		
						
					}
					else
					{
						print "<a href='/competition/$competition->id/participate' class='btn btn-lg btn-success' style='margin-left:100px;'>Прийняти участь</a>";	
					}
					
						@endphp
					
			@else
				<a href="#" class="btn btn-lg btn-success disabled" style="margin-left:100px;" disabled="disabled">Прийняти участь</a>
			@endif
			@else
				<p><h3 style='margin-left:100px; color:red;'>Закінчено</h3></p>
			<a href='/competition/{{$competition->id}}/result_index' class='btn btn-lg btn-danger' style='margin-left:100px;'>Результати</a>
			@if ($competition->creator == (Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic))
				@if ($competition->results == '')
			<br><br><a href='/competition/{{$competition->id}}/result_add' class='btn btn-lg btn-danger' style='margin-left:100px;'>Додати результати</a>	
				@endif
			@Endif
			@endif
			
			@if ($competition->creator == (Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic))
				 @php
				 $date1 = new DateTime($competition->date_to);
				 $date_curr = new DateTime('NOW');
				 @endphp
					@if ($date1 > $date_curr)
			<br><br><a href='/competition/{{$competition->id}}/change_competition' class='btn btn-lg btn-danger' style='margin-left:100px;'>Редагувати змагання</a>	
					@endif
			@endif
			@endif
				
                </div>
              
            </div>

        </div>
</div>

<!-- *******************************************************************************English*******************************************************************************-->
<div class="en">
  <div class="container">
            <h3 class="text-center">{{$competition->tourname}}  </h3>
            <h4 class="text-center">Starting from {{$competition->date_from}} to {{$competition->date_to}}</h4>
                    </div>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-xs-12 text-center center-block tournament-button-nav">
                <a href="/competition/{{$competition->id}}" class="btn btn-lg trainer-nav reglament-color">Information</a>

                <a href="/competition/{{$competition->id}}/participants" class="btn btn-lg trainer-nav categories-color btn-primary">
				@php
				$part = explode(',', $competition->sportsman_id);
				$count1 = count($part);
				for ($i = 0; $i < $count1; $i++)
				{
				if ($part[$i] =='' or $part[$i] == ' ')	unset($part[$i]);
			
				}
				$part1 = count($part);
				print "Participant $part1/$competition->limited</a>";
				@endphp
				<a href="/competition/{{$competition->id}}/judges" class="btn btn-lg trainer-nav live-color btn-warning">Judges
				@php
				$part = explode(',', $competition->judge_id);
				$count1 = count($part);
				for ($i = 0; $i < $count1; $i++)
				{
				if ($part[$i] =='' or $part[$i] == ' ')	unset($part[$i]);
			
				}
				$part1 = count($part);
				echo('('.$part1.')');
				@endphp
				</a>
				
			
        </div>
        </div>
        <hr>
            </div>
			@if(Session::has('message'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>	
		@endif



    <meta property="og:image" content="../images/tournaments/tour73125509.jpg">    <div class="container" style="overflow:hidden;">
        <h3 class="text-center reglament">Order</h3>
        <div class="row">
            <div class="col-sm-8 tournament-info">
                <h5 class="font-gray">Information:</h5>
				<p>{{$competition->description}}
                </p>
<br>
<h5 class="font-gray">Competition programm</h5><br>
<p>{{$competition->programm}} </p>
                <br>
                 <h5 class="font-gray">Adress:</h5>
                <p>{{$competition->adress}}</p>
                <br>
                <h5 class="font-gray">Contacts:</h5>
                                <p>{{$competition->contacts}}</p>
                 <br>


                <h5 class="font-gray">Author:</h5>
                {{$competition->creator}}

            </div>
            <div class="col-md-4 ">
                   <hr class="hidden-lg hidden-md hidden-sm">
                                        <div class="row text-center">
                        <img style="" class="tournament-icon img-rounded " src="{{$competition->logo}}" alt="">
                        <hr width="80%">
                </div>

			@if(Auth::guest())
					
				@else
					@php
					$date_curr = new DateTime('NOW');
					$date2 = new DateTime($competition->date_to);
					@endphp
					@if ($date_curr < $date2)
					
					@if(Auth::user()->role == 'Тренер') 
						
						@php
					
					$part = explode(',', Auth::User()->participation);
					$result = false;
					foreach ($part as $part1)
					{
						$part1 *= 1;
						if ($part1 == $competition->id )
						{
							$result = true;	
						}
					}
					if ($result)
					{
						print "<a href='/competition/$competition->id/quit' class='btn btn-lg btn-danger' style='margin-left:100px;'>Quit</a>";		
					}
					else
					{
						print "<a href='/competition/$competition->id/participate' class='btn btn-lg btn-success' style='margin-left:100px;'>Participate</a>";	
					}
					
						@endphp
					
			@else
				<a href="#" class="btn btn-lg btn-success disabled" style="margin-left:100px;" disabled="disabled">Participate</a>
			@endif
			@else
				<p style="margin-left:100px; color:red;"><h3 style='margin-left:100px; color:red;'>Finished</h3></p>
			<a href='/competition/{{$competition->id}}/result_index' class='btn btn-lg btn-danger' style='margin-left:100px;'>Results</a>
			@if ($competition->creator == (Auth::user()->surname.' '.Auth::user()->name.' '.Auth::user()->patronymic))
			<br><br><a href='/competition/{{$competition->id}}/result_add' class='btn btn-lg btn-danger' style='margin-left:100px;'>Add/Change results</a>	
			@Endif
			@endif
			@endif		
				
                </div>
              
            </div>

        </div>
</div>

@endsection