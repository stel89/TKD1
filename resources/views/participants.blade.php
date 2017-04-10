@extends('layouts.app')

@section('content')
<div class="ua">
<title>Учасники</title>
        <hr>
        <div class="row">
            <div class="col-xs-12 text-center center-block tournament-button-nav">
                <a href="/competition/{{$competition->id}}" class="btn btn-lg trainer-nav reglament-color">Інформація</a>
				
					
                <a href="/competition/{{$competition->id}}/participants" class="btn btn-lg trainer-nav  btn-primary">
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
				</a>
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
						print "<a href='/competition/$competition->id/change' class='btn btn-lg btn-default' style='margin-left:100px;'>Замінити спортсменів</a>";	
						print "<a href='/competition/$competition->id/quit' class='btn btn-lg btn-danger' style='margin-left:10px;'>Знятися з змагання</a>";	
											
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
				
			@endif
			@endif
			   
        </div>
        </div>
        <hr>
		@if(Session::has('message'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>	
		@endif
            
<div class="col-xs-12 " style="text-align:center;">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Тренери</h4>
            </div>
    <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="№: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">№ </div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.Б.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">П.І.Б. </div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Організація: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Організація</div></th>
    </tr>
    </thead>
     <tbody aria-live="polite" aria-relevant="all">
	@php
	$i=1;
	 foreach ($trainers as $trainer)
	 {
	 if (property_exists($trainer, 'id'))
	 {
                echo('<tr role="row">');			
                print "<td>$i</td>";
                print "<td>$trainer->surname $trainer->name $trainer->patronymic</td>";
                print "<td>$trainer->org</td>";
           echo('</tr>');
		   $i++;
	 }
	 else
	 {
		 
		print_r($trainer);
		
	 }
	 
	 }
			@endphp
		                    
	
                </tbody>
    </table>
    </div>
    </div>

	<div class="col-xs-12 " style="text-align:center; margin-left:auto; margin-right:auto;">
                <h4 class="grey" style="padding: 5px; border-radius:15px;" >Спортсмени</h4>
      </div>
	 <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="№: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">№ </div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Прізвище та Ім'я</div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Тренер: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Тренер</div></th>
		<th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Дан: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Дан</div></th>
    </tr>
    </thead>
     <tbody aria-live="polite" aria-relevant="all">
	
@php
	$i=1;
	 foreach ($sportsmans as $sportsman)
	 {
	 if (property_exists($sportsman, 'id'))
	 {
                echo('<tr role="row">');			
                print "<td>$i</td>";
                print "<td>$sportsman->surname $sportsman->name</td>";
				print "<td>$sportsman->trainer_one</td>";
                print "<td>$sportsman->dan</td>";
           echo('</tr>');
		   $i++;
	 }
	 else
	 {
		 
		print_r($trainer);
		
	 }
	 
	 }
			@endphp
	
                </tbody>
    </table>
    </div>
    </div>
</div>


<div class="en">
<title>Participants</title>
        <hr>
        <div class="row">
            <div class="col-xs-12 text-center center-block tournament-button-nav">
                <a href="/competition/{{$competition->id}}" class="btn btn-lg trainer-nav reglament-color">Information</a>
				
					
                <a href="/competition/{{$competition->id}}/participants" class="btn btn-lg trainer-nav  btn-primary">
				@php
				$part = explode(',', $competition->sportsman_id);
				$count1 = count($part);
				for ($i = 0; $i < $count1; $i++)
				{
				if ($part[$i] =='' or $part[$i] == ' ')	unset($part[$i]);
			
				}
				$part1 = count($part);
				print "Participants $part1/$competition->limited</a>";
				@endphp
				</a>
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
				@endphp</a>
				@if(Auth::guest())
					
				@else
				
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
						print "<a href='/competition/$competition->id/quit' class='btn btn-lg btn-danger' style='margin-left:100px;'>Leave competition</a>";		
					}
					else
					{
						print "<a href='/competition/$competition->id/participate' class='btn btn-lg btn-success' style='margin-left:100px;'>Participate</a>";	
					}
					
						@endphp
			@else
				<a href="#" class="btn btn-lg btn-success disabled" style="margin-left:100px;" disabled="disabled">Participate</a>
			@endif
			@endif
			   
        </div>
        </div>
        <hr>
		@if(Session::has('message'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>	
		@endif
            
<div class="col-xs-12 " style="text-align:center;">
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Coaches</h4>
            </div>
    <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="№: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">№</div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.Б.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Full name</div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Організація: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Organization</div></th>
    </tr>
    </thead>
     <tbody aria-live="polite" aria-relevant="all">
	@php
	$i=1;
	 foreach ($trainers as $trainer)
	 {
	 if (property_exists($trainer, 'id'))
	 {
                echo('<tr role="row">');			
                print "<td>$i</td>";
                print "<td>$trainer->surname $trainer->name $trainer->patronymic</td>";
                print "<td>$trainer->org</td>";
           echo('</tr>');
		   $i++;
	 }
	 else
	 {
		 
		print_r($trainer);
		
	 }
	 
	 }
			@endphp
		                    
	
                </tbody>
    </table>
    </div>
    </div>

	<div class="col-xs-12 " style="text-align:center; margin-left:auto; margin-right:auto;">
                <h4 class="grey" style="padding: 5px; border-radius:15px;" >Sportsmans</h4>
      </div>
	 <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="№: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">№ </div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Name and Surname</div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Тренер: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Coach</div></th>
		<th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Дан: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Dan</div></th>
    </tr>
    </thead>
     <tbody aria-live="polite" aria-relevant="all">
	
@php
	$i=1;
	 foreach ($sportsmans as $sportsman)
	 {
	 if (property_exists($sportsman, 'id'))
	 {
                echo('<tr role="row">');			
                print "<td>$i</td>";
                print "<td>$sportsman->surname $sportsman->name</td>";
				print "<td>$sportsman->trainer_one</td>";
                print "<td>$sportsman->dan</td>";
           echo('</tr>');
		   $i++;
	 }
	 else
	 {
		 
		print_r($trainer);
		
	 }
	 
	 }
			@endphp
	
                </tbody>
    </table>
    </div>
    </div>
</div>
@endsection