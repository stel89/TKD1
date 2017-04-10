@extends('layouts.app')

@section('content')
<div class="ua">
 <div class="container">
        <div class="row">
            <h4 class="text-center">Введіть код доступу </h4>
        </div>
		<br>
        <div class="row">

            <form method="post" style="margin-left:35%;" action="{{action('CompetitionController@judge_pass',['id' => $competition->id])}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                        <label for="">Код:</label>
                        <input type="text" name="access_code">
                    <input type="submit" class="btn btn-sm btn-success" name="access_button" value="Підтвердити" style="margin-left:1%; margin-top:-2px;">
                </div>
            </form>
        </div>
		@if(Session::has('message'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>	
		@endif
		@if(Session::has('error'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-error">{{Session::get('message')}}</li>
</ul>
@endif
    </div>
</div>

<div class="en">
 <div class="container">
        <div class="row">
            <h4 class="text-center">Enter access code</h4>
        </div>
		<br>
        <div class="row">

            <form method="post" style="margin-left:35%;" action="{{action('CompetitionController@judge_pass',['id' => $competition->id])}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                        <label for="">Code:</label>
                        <input type="text" name="access_code">
                    <input type="submit" class="btn btn-sm btn-success" name="access_button" value="Confirm" style="margin-left:1%; margin-top:-2px;">
                </div>
            </form>
        </div>
		@if(Session::has('message'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>	
		@endif
		@if(Session::has('error'))
		<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-error">{{Session::get('message')}}</li>
</ul>	
		@endif
    </div>
</div>
@endsection