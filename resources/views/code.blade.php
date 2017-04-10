@extends('layouts.app')

@section('content')
<div class="ua">
 <div class="container">
        <div class="row">
            <h4 class="text-center">Введіть код доступу </h4>
        </div>
		<br>
        <div class="row">

            <form method="post" style="margin-left:35%;" action="/competition/{{$competition->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                        <label for="">Код:</label>
                        <input type="text" name="access_code">
                    <input type="submit" class="btn btn-sm btn-success" name="access_button" value="Підтвердити" style="margin-left:1%; margin-top:-2px;">
                </div>
            </form>
        </div>
    </div>
</div>

<div class="en">
 <div class="container">
        <div class="row">
            <h4 class="text-center">Enter code</h4>
        </div>
		<br>
        <div class="row">

            <form method="post" style="margin-left:35%;" action="/competition/{{$competition->id}}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                        <label for="">Code:</label>
                        <input type="text" name="access_code">
                    <input type="submit" class="btn btn-sm btn-success" name="access_button" value="Confirm" style="margin-left:1%; margin-top:-2px;">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection