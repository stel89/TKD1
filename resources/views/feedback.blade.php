@extends('layouts.app')

@section('content')
<div class="ua">
<title>Зв'язок з адмінстрацією</title>
<h3 class="text-center gray">Зв'язок з адмінстрацією</h3>
	@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px; text-align:center;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <form method="POST" action="{{action('FeedbackController@store')}}">
                    <div class="form-group">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label>Ім'я</label>
                        <input class="form-control" id="myname" name="myname" required="" type="text" placeholder="Як вас звати?">
                    </div>
                    <div class="form-group">
                        <label>Тема:</label>
                        <input class="form-control" type="text" name="topic" placeholder="Тема" required="">
                    </div>
                    <div class="form-group">
                        <label>Повідомлення:</label>
                <textarea class="form-control" name="message" id="message" required="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ваші контакти:</label>
                 <textarea class="form-control" name="contact" id="contact" required="" cols="30" rows="3"></textarea>
                    </div>
                    <div class="from-group">
                        <input class="btn btn-success btn-lg" type="submit" value="Відправити">
                    </div>
                </form>
            </div>
        </div>

@if (count($errors) > 0)
 <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-danger">{{ $error }}</li>
@endforeach
</ul>
@endif
    </div>
</div>

<div class="en">
<title>Feedback</title>
<h3 class="text-center gray">Feedback</h3>
	@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px; text-align:center;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <form method="POST" action="{{action('FeedbackController@store')}}">
                    <div class="form-group">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label>Name</label>
                        <input class="form-control" id="myname" name="myname" required="" type="text" placeholder="Your Name?">
                    </div>
                    <div class="form-group">
                        <label>Theme:</label>
                        <input class="form-control" type="text" name="topic" placeholder="Theme" required="">
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                <textarea class="form-control" name="message" id="message" required="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Your contacts:</label>
                 <textarea class="form-control" name="contact" id="contact" required="" cols="30" rows="3"></textarea>
                    </div>
                    <div class="from-group">
                        <input class="btn btn-success btn-lg" type="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@if (count($errors) > 0)
 <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-danger">{{ $error }}</li>
@endforeach
</ul>
@endif
    </div>
</div>
	
	@endsection