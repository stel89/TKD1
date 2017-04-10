@extends('layouts.app')

@section('content')
<div class="ua">
<br>
<div id="content" class="container">
    <div class="row">
        <div class="col-sm-8">
		<div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <form class="form-horizontal regforms" method="post" enctype="multipart/form-data" action="{{ url('/password/email') }}">
			{!! csrf_field() !!}
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="email">E-mail</label>
                    <div class="col-sm-8 ">
                        <input class="form-control" type="email" id="email" name="email"  value="{{ old('email') }}" placeholder="E-mail" autofocus="" required="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>
                </div>

                           
                <div class="form-group">
                    <div class="text-center col-md-offset-4 col-md-8">
                        <input type="submit" class="btn btn-lg btn-success full-width" value="Відновити пароль">
                    </div>
                </div>
        </form></div>
    </div>
</div>
</div>
</div>

<div class="en">
<br>
<div id="content" class="container">
    <div class="row">
        <div class="col-sm-8">
		<div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <form class="form-horizontal regforms" method="post" enctype="multipart/form-data" action="{{ url('/password/email') }}">
			{!! csrf_field() !!}
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="email">E-mail</label>
                    <div class="col-sm-8 ">
                        <input class="form-control" type="email" id="email" name="email"  value="{{ old('email') }}" placeholder="E-mail" autofocus="" required="">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>
                </div>

                           
                <div class="form-group">
                    <div class="text-center col-md-offset-4 col-md-8">
                        <input type="submit" class="btn btn-lg btn-success full-width" value="Restore password">
                    </div>
                </div>
        </form></div>
    </div>
</div>
</div>
</div>
@endsection