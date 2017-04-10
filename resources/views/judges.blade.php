@extends('layouts.app')

@section('content')
<div class="ua">
<title>Судді</title>
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
				print "Учасники $part1/$competition->limited</a>";
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
				
				@php
				$date_curr = new DateTime('NOW');
				$date2 = new DateTime($competition->date_to);
				@endphp
				
				@if ($date_curr < $date2)
				
				@if(Auth::guest())
					
				@else
				
					@if(Auth::user()->role == 'Суддя') 
						
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
						print "<a href='/competition/$competition->id/judge_quit' class='btn btn-lg btn-danger' style='margin-left:100px;'>Знятися з змагання</a>";		
					}
					else
					{
						print "<a href='/competition/$competition->id/judge_participate' class='btn btn-lg btn-success' style='margin-left:100px;'>Зарееструватись суддею</a>";	
					}
					
						@endphp
			@else
				<a href="#" class="btn btn-lg btn-success disabled" style="margin-left:100px;" disabled="disabled">Зарееструватись суддею</a>
			@endif
			@endif
			@else
				
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
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Судді</h4>
            </div>
	 <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="№: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">№ </div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.Б.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">П.І.Б. </div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Категорія: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Категорія</div></th>
    </tr>
    </thead>
     <tbody aria-live="polite" aria-relevant="all">
	
@php
	$i=1;
	 foreach ($judges as $judge)
	 {
	 if (property_exists($judge, 'id'))
	 {
                echo('<tr role="row">');			
                print "<td>$i</td>";
                print "<td>$judge->surname $judge->name $judge->patronymic</td>";
                print "<td>$judge->cat</td>";
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
<title>Judges</title>
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
				@endphp
				</a>
				
				@if(Auth::guest())
					
				@else
				
					@if(Auth::user()->role == 'Суддя') 
						
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
						print "<a href='/competition/$competition->id/judge_quit' class='btn btn-lg btn-danger' style='margin-left:100px;'>Leave competition</a>";		
					}
					else
					{
						print "<a href='/competition/$competition->id/judge_participate' class='btn btn-lg btn-success' style='margin-left:100px;'>Participate by judge</a>";	
					}
					
						@endphp
			@else
				<a href="#" class="btn btn-lg btn-success disabled" style="margin-left:100px;" disabled="disabled">Participate by judge</a>
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
                <h4 class="grey" style="padding: 5px; border-radius:15px;">Judges</h4>
            </div>
	 <div class="container">
    <div class="row ">
    <table style="margin-left:5%; width:90%" id="mytable" class="table tablesorter tablesorter-default" role="grid">
    <thead>
    <tr role="row" class="tablesorter-headerRow">
        <th style="user-select: none;" data-column="0" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="№: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">№ </div></th>
        <th style="user-select: none;" data-column="1" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="П.І.Б.: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Full name</div></th>
        <th style="user-select: none;" data-column="2" class="tablesorter-header tablesorter-headerUnSorted" tabindex="0" scope="col" role="columnheader" aria-disabled="false" aria-controls="mytable" unselectable="on" aria-sort="none" aria-label="Категорія: No sort applied, activate to apply an ascending sort"><div class="tablesorter-header-inner">Category</div></th>
    </tr>
    </thead>
     <tbody aria-live="polite" aria-relevant="all">
	
@php
	$i=1;
	 foreach ($judges as $judge)
	 {
	 if (property_exists($judge, 'id'))
	 {
                echo('<tr role="row">');			
                print "<td>$i</td>";
                print "<td>$judge->surname $judge->name $judge->patronymic</td>";
                print "<td>$judge->cat</td>";
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