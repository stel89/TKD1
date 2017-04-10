@extends('layouts.app')

@section('content')
<title>Результати</title>
 <script src="../../summernote/summernote.js"></script>
 <link href="../../summernote/summernote.css" rel="stylesheet">
 <script src="../../summernote/lang/summernote-ru-RU.js"></script>
 <script>
$(document).ready(function() {
  $('#summernote').summernote({
	lang: 'ru-RU',
	 minHeight: 300,
	toolbar: [
    ['style', ['style','bold', 'italic', 'underline', 'clear']],
	['insert', ['table']],
    ['font', ['strikethrough', 'superscript', 'subscript', 'fontname']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']],
	['misc', ['undo', 'redo']]
  ]
	
	});
});
</script>

 <div class="container">
        <div class="row">
<form method="post" enctype="multipart/form-data" action="/competition/{{$competition->id}}/result_add">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group">
                <label class="col-md-12 text-center ua"><h3>Результати</h3></label>
				<label class="col-md-12 text-center en"><h3>Results</h3></label>
				
				<div class="row" style="text-align:center;">
<h1><b> Медалі</b> </h1>
@php

$a = explode(',',$competition->age_group);
@endphp
	<div style="width:45%; text-align:center; margin-left:auto; margin-right:auto;">
@for ($i = 0; $i < count($a); $i++)
	<h2>{{$a[$i]}}</h2>
	<h2 style="color:Yellow; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Перші місця заняли</h2>
	<select class="form-control" multiple="" id="gold" name="gold{{$i}}[]">
	<option value=""> - </option>
	@foreach ($sportsmans as $sportsman)
	<option value="{{$sportsman->id}}">{{$sportsman->surname}} {{$sportsman->name}}</option>
	@endforeach
	</select> <br>
	
	<h2 style="color:gray; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Другі місця заняли</h2>
	<select class="form-control" multiple="" id="gold" name="silver{{$i}}[]">
	<option value=""> - </option>
	@foreach ($sportsmans as $sportsman)
	<option value="{{$sportsman->id}}">{{$sportsman->surname}} {{$sportsman->name}}</option>
	@endforeach
	</select> <br>
	
	<h2 style="color:brown; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Треті місця заняли</h2>
	<select class="form-control" multiple="" id="gold" name="bronze{{$i}}[]">
	<option value=""> - </option>
	@foreach ($sportsmans as $sportsman)
	<option value="{{$sportsman->id}}">{{$sportsman->surname}} {{$sportsman->name}}</option>
	@endforeach
	</select> <br>
	
<br>	
@endfor
</div>
</div>
				
                <div class="col-md-12">
                    <textarea rows="4" id="summernote" class="ckeditor" name="results" required=""><p class="ua">Текстова частина. Уважно заповнюйте призові місця, у рази помилки зверніться до адміністрації / Text part. Fill results carfully, if you make a mistake contact with administration</p></textarea>

                </div>

			 <div class="form-group regforms" style="margin-left:45%;position:relative; top:20px;">
                    <div class="col-sm-2">
                        <button id="regComplete" type="submit" name="toursubmit" class="btn btn-lg btn-success ua">Додати</button>
						<button id="regComplete" type="submit" name="toursubmit" class="btn btn-lg btn-success en">ADD</button>
                    </div>
                </div>
    </div>
</form></div>
<br><br>

</div>





@endsection