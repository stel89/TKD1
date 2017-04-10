@extends('layouts.app')

@section('content')
<div class="ua">
<div class="container">
    <h2 class="gray text-center">Пошук за прізвищем</h2>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <form id="search_form" class="form-inline" method="post" action="{{action('SearchController@find')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="q" autofocus="" class="form-control  no-border-radius" value="" required="" placeholder="прізвище спортсмена/тренера" style="width:500px;">
                       <button style="border:none; padding:0;"><div id="search_button" class="input-group-addon bg-blue no-border-radius"><span class="glyphicon glyphicon-search" style="height:20px;"></span></div></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <div class="result-block">
                            </div>
        </div>
    </div>
</div>
</div>

<div class="en">
<div class="container">
    <h2 class="gray text-center">Search by Surname</h2>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <form id="search_form" class="form-inline" method="post" action="{{action('SearchController@find')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="q" autofocus="" class="form-control  no-border-radius" value="" required="" placeholder="Surname" style="width:500px;">
                       <button style="border:none; padding:0;"><div id="search_button" class="input-group-addon bg-blue no-border-radius"><span class="glyphicon glyphicon-search" style="height:20px;"></span></div></button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 ">
            <div class="result-block">
                            </div>
        </div>
    </div>
</div>
</div>
@endsection