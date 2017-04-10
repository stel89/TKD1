@extends('layouts.app')

@section('content')
<div class="ua">
<title>Редагування данних спортсмена</title>
  <div class="row">
        <div class="text-center text-uppercase">
            <h4 class="gray">{{Auth::user()->role}}</h4>
        </div>

    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container ">
        <div class="row text-center center-block">
            <a href="/add_sportsman" class="btn btn-lg btn-success trainer-nav">Додати спортсмена</a>
            <a href="/make_competition" class="btn btn-lg btn-info trainer-nav">Додати змагання</a>
            <a href="/make_training" class="btn btn-lg btn-warning trainer-nav">Тренувальний збір</a>
            <a href="/make_pumce" class="btn btn-lg btn-primary trainer-nav phumse_button">Пумсе</a>
            <a href="/make_seminar" class="btn btn-lg btn-danger trainer-nav">Семінар</a>
        </div>
@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif

@if (count($errors) > 0)
<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-error">{{ $error }}</li>
@endforeach
</ul>
@endif
    </div><br>
 <div class="container bg-gray regforms">
        <h3 class="text-center white">Данні спортсмена</h3>
        <form class="form-horizontal" method="post" action="/sportsman/{{$sportsman->id}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PATCH"/>
            <div class="form-group">
                <div class="col-md-4">
                    <label class="col-md-12">Прізвище</label>
                    <div class="col-md-12">
                        <input autofocus="" placeholder="Прізвище" class="form-control" id="sportsurname" name="sportsurname" type="text" value="{{$sportsman->surname}}" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-12 ">Ім'я</label>
                    <div class="col-md-12">
                        <input placeholder="Ім&#39;я" class="form-control" id="sportname" name="sportname" type="text" value="{{$sportsman->name}}" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-12">Рік народження</label>
                    <div class="col-md-12">
                        <input class="form-control" id="birthdate" name="birthdate" type="number" min="1900" max="2100" value="{{$sportsman->birthday}}" required="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-sm-12" for="sex">Стать</label>
                    <div class="col-sm-12 ">
                        <select class="form-control" id="sex" name="sex" required="" value="{{$sportsman->sex}}">
                            <option value="Чоловіча">Хлопці</option>
                            <option value="Жіноча">Дівчата</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                        <label class="col-sm-12" for="rang_id">Розряд</label>
                    <div class="col-sm-12 ">
                        <select class="form-control" id="rang_id" name="rang_id" required="" value="{{$sportsman->rang}}">
                                                            <option value="3">3</option>
                                                            <option value="2">2</option>
                                                            <option value="1">1</option>
                                                            <option value="КМС">КМС</option>
                                                            <option value="МС">МС</option>
                                                            <option value="МСМК">МСМК</option>
                                                            <option value="1юн">1юн</option>
                                                            <option value="2юн">2юн</option>
                                                            <option value="3юн">3юн</option>
                                                            <option value="ЗМС">ЗМС</option>
                                                    </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-sm-12" for="rang_id">Гип/Дан</label>
                    <div class="col-sm-12 ">
                        <select class="form-control" id="dan" name="dan" value="{{$sportsman->dan}}" required="">
                            <option value="10 Гип">10 гип (Білий)</option><option value="9 Гип">9 гип (Жовтий)</option><option value="8 Гип">8 гип (Помаранчевий)</option><option value="7 Гип">7 гип (Зелений)</option><option value="6 Гип">6 гип (Пурпурний)</option><option value="5 Гип">5 гип (Голубий)</option><option value="4 Гип">4 гип (Синій)</option><option value="3 Гип">3 гип (Червоний)</option><option value="2 Гип">2 гип (Світло коричневий)</option><option value="1 Гип">1 гип (Коричневий)</option><option value="1 пум">1 пум</option><option value="5 дан">5 дан</option><option value="4 дан">4 дан</option><option value="3 дан">3 дан</option><option value="2 дан">2 дан</option><option value="1 дан">1 дан</option>                        </select>
                    </div>
                </div>
            </div>
            <h3 class="text-center white">Тренер 1</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="col-sm-12 ">
                        <select class="form-control" id="trainer_one" name="trainer_one" required="">
                            <option selected="" value="{{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronymic}}">{{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronymic}}</option> </select>
                    </div>
                </div>
            </div>
            <h3 class="text-center white">Тренер 2 (Залиште пустим якщо немає)</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-md-12">Прізвище </label>
                    <div class="col-md-12">
                        <input class="form-control" id="trainer_two" name="trainer_two" type="text" value="{{$sportsman->trainer_two}}" placeholder="Залиште пустим якщо немає">
                    </div>
                </div>
            </div>
			 <h3 class="text-center white">Аватар</h3>
			 <div class="form-group">
                                <div class="col-md-12">
								<div class="col-md-12">
                                    <input class="form-control" type="file" id="avatar1" name="avatar1" placeholder="Залиште пустим якщо не бажаете змінювати">
									<label class="col-sm-8 control-label" for="avatar1">Залиште пустим якщо не бажаете змінювати</label>
                                </div>
                            </div></div><br>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <button style="width:100% !important; padding:20px;" id="regComplete" type="submit" name="sportsubmit" class="btn btn-danger ">Змінити</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <style>body{overflow-x:hidden;} </style><div class="container">
</div>
</div>



<div class="en">
<title>Editing sportsman data</title>
  <div class="row">
        <div class="text-center text-uppercase">
            <h4 class="gray">{{Auth::user()->role}}</h4>
        </div>

    </div>
    <div class="container">
        <hr>
    </div>
    <div class="container ">
        <div class="row text-center center-block">
            <a href="/add_sportsman" class="btn btn-lg btn-success trainer-nav">Add sportsman</a>
            <a href="/make_competition" class="btn btn-lg btn-info trainer-nav">Add competition</a>
            <a href="/make_training" class="btn btn-lg btn-warning trainer-nav">Training camp</a>
            <a href="/make_pumce" class="btn btn-lg btn-primary trainer-nav phumse_button">Pumse</a>
            <a href="/make_seminar" class="btn btn-lg btn-danger trainer-nav">Seminar</a>
        </div>
@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif

@if (count($errors) > 0)
<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-error">{{ $error }}</li>
@endforeach
</ul>
@endif
    </div><br>
 <div class="container bg-gray regforms">
        <h3 class="text-center white">Sportsman data</h3>
        <form class="form-horizontal" method="post" action="/sportsman/{{$sportsman->id}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PATCH"/>
            <div class="form-group">
                <div class="col-md-4">
                    <label class="col-md-12">Surname</label>
                    <div class="col-md-12">
                        <input autofocus="" placeholder="Прізвище" class="form-control" id="sportsurname" name="sportsurname" type="text" value="{{$sportsman->surname}}" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-12 ">Name</label>
                    <div class="col-md-12">
                        <input placeholder="Ім&#39;я" class="form-control" id="sportname" name="sportname" type="text" value="{{$sportsman->name}}" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <label class="col-md-12">Birthday</label>
                    <div class="col-md-12">
                        <input class="form-control" id="birthdate" name="birthdate" type="number" min="1900" max="2100" value="{{$sportsman->birthday}}" required="">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-sm-12" for="sex">Gender</label>
                    <div class="col-sm-12 ">
                        <select class="form-control" id="sex" name="sex" required="" value="{{$sportsman->sex}}">
                            <option value="Чоловіча">Male</option>
                            <option value="Жіноча">Feamale</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                        <label class="col-sm-12" for="rang_id">Rang</label>
                    <div class="col-sm-12 ">
                        <select class="form-control" id="rang_id" name="rang_id" required="" value="{{$sportsman->rang}}">
                                                           <option value="0"> - </option>
                                                            <option value="3">3</option>
                                                            <option value="2">2</option>
                                                            <option value="1">1</option>
                                                            <option value="КМС">candidate master of sports</option>
                                                            <option value="МС">Master of sport</option>
                                                            <option value="МСМК">Master of Sports, International Class</option>
                                                            <option value="1юн">1 junior</option>
                                                            <option value="2юн">2 junior</option>
                                                            <option value="3юн">3 junior</option>
                                                            <option value="ЗМС">Merited Master of Sports</option>
                                                    </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-sm-12" for="rang_id">Gip/Dan</label>
                    <div class="col-sm-12 ">
                        <select class="form-control" id="dan" name="dan" value="{{$sportsman->dan}}" required="">
                            <option value="10 Gip">10 gip (White)</option><option value="9 Gip">9 gip (Yelow)</option><option value="8 Gip">8 gip (Orange)</option><option value="7 gip">7 gip (Green)</option><option value="6 gip">6 gip (Purple)</option><option value="5 gip">5 gip (Light blue)</option><option value="4 gip">4 gip (Синій)</option><option value="3 gip">3 gip (Red)</option><option value="2 gip">2 gip (Light brown)</option><option value="1 gip">1 gip (Brown)</option><option value="1 pum">1 pum</option><option value="5 dan">5 dan</option><option value="4 dan">4 dan</option><option value="3 dan">3 dan</option><option value="2 dan">2 dan</option><option value="1 dan">1 dan</option>                        </select>
                    </div>
                </div>
            </div>
            <h3 class="text-center white">Trainer one</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="col-sm-12 ">
                        <select class="form-control" id="trainer_one" name="trainer_one" required="">
                            <option selected="" value="{{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronymic}}">{{Auth::user()->surname}} {{Auth::user()->name}} {{Auth::user()->patronymic}}</option> </select>
                    </div>
                </div>
            </div>
            <h3 class="text-center white">Trainer two (Залиште пустим якщо немає)</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="col-md-12">Surname</label>
                    <div class="col-md-12">
                        <input class="form-control" id="trainer_two" name="trainer_two" type="text" value="{{$sportsman->trainer_two}}" placeholder="Leave empty if you don't want to chache it">
                    </div>
                </div>
            </div>
			 <h3 class="text-center white">Avatar</h3>
			 <div class="form-group">
                                <div class="col-md-12">
								<div class="col-md-12">
                                    <input class="form-control" type="file" id="avatar1" name="avatar1" placeholder="Leave empty if you don't want to chache it">
									<label class="col-sm-8 control-label" for="avatar1">Leave empty if you don't want to chache it</label>
                                </div>
                            </div></div><br>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <button style="width:100% !important; padding:20px;" id="regComplete" type="submit" name="sportsubmit" class="btn btn-danger ">Change</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <style>body{overflow-x:hidden;} </style><div class="container">
</div>
</div>
@endsection   