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
                        <input type="text" name="q" autofocus="" class="form-control  no-border-radius" value="" required="" placeholder="спортсмени, тренера, організації" style="width:500px;">
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
                <style>
    .dangertr a,
    .dangertr td{
        color: #a94442 !important;
    }
</style>


@php
if (count($trainers) > 0)
{
 print " <h3 class='blue text-center'>Перелік тренерів та продавців</h3>
    <table class='table table-hover'>
        <thead>
        <tr>
            <th>Прізвище</th>
            <th>Ім'я</th>
            <th>По-батькові</th>
			<th>Ким являеться</th>
            <th>Організація</th>
        </tr></thead>
        <tbody>";
		foreach ($trainers as $trainer)
		{
			if ($trainer->role == 'Тренер')
			{
        print "<tr class='dangertr'>
                <td><a href='/profile/$trainer->id'>$trainer->surname</a></td>";
                print "<a href='/profile/$trainer->id'><td>$trainer->name</a></td>";
                print "<a href='/profile/$trainer->id'><td>$trainer->patronymic</a></td>";
				print "<a href='/profile/$trainer->id'><td>$trainer->role</a></td>";
                print "<a href='/profile/$trainer->id'><td>$trainer->org</a></td>
            </tr>
                </tbody>
    </table><br>";
		}
    else
	{
		  print "<tr class='dangertr'>
                 <td><a href='/profile/$trainer->id'>$trainer->surname</a></td>";
                print "<td><a href='/profile/$trainer->id'>$trainer->name</a></td>";
                print "<td></td>";
				print "<td><a href='/profile/$trainer->id'>$trainer->role</a></td>";
                print "<td><a href='/profile/$trainer->id'>$trainer->patronymic</a></td>
            </tr>
                </tbody>
    </table><br>";
	}
}
}
else if (count($sportsmans) > 0)
{
 print " <h3 class='blue text-center'>Перелік спортсменів</h3>
    <table class='table table-hover'>
        <thead>
        <tr>
           <th>Прізвище</th>
            <th>Ім'я</th>
            <th>Тренер</th>
            <th>Рік</th>
        </tr></thead>
        <tbody>";
		foreach ($sportsmans as $sportsman)
		{
        print "  <tr>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->surname</a></td>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->name</a></td>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->trainer_one</a></td>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->birthday</a></td>
            </tr>
                </tbody>
    </table>";
		}	
}
else
{
	echo('<p style="text-align:center;"><br>Вибачте, але нікого з таким прізвищем не знайшлось.</p>');
}

@endphp

            </div>
        </div>
    </div>
</div>
</div>

<div class="en">
<div class="container">
    <h2 class="gray text-center">Search by surname</h2>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <form id="search_form" class="form-inline" method="post" action="{{action('SearchController@find')}}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" name="q" autofocus="" class="form-control  no-border-radius" value="" required="" placeholder="sportsmans, coaches, organizations" style="width:500px;">
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
                <style>
    .dangertr a,
    .dangertr td{
        color: #a94442 !important;
    }
</style>


@php
if (count($trainers) > 0)
{
 print " <h3 class='blue text-center'>List of trainers and sellers</h3>
    <table class='table table-hover'>
        <thead>
        <tr>
            <th>Surname</th>
            <th>Name</th>
            <th>Patronymic</th>
			<th>Category</th>
            <th>Organizaion</th>
        </tr></thead>
        <tbody>";
		foreach ($trainers as $trainer)
		{
			if ($trainer->role == 'Тренер')
			{
        print "<tr class='dangertr'>
                <td><a href='/profile/$trainer->id'>$trainer->surname</a></td>";
                print "<a href='/profile/$trainer->id'><td>$trainer->name</a></td>";
                print "<a href='/profile/$trainer->id'><td>$trainer->patronymic</a></td>";
				print "<a href='/profile/$trainer->id'><td>$trainer->role</a></td>";
                print "<a href='/profile/$trainer->id'><td>$trainer->org</a></td>
            </tr>
                </tbody>
    </table><br>";
		}
    else
	{
		  print "<tr class='dangertr'>
                 <td><a href='/profile/$trainer->id'>$trainer->surname</a></td>";
                print "<td><a href='/profile/$trainer->id'>$trainer->name</a></td>";
                print "<td></td>";
				print "<td><a href='/profile/$trainer->id'>$trainer->role</a></td>";
                print "<td><a href='/profile/$trainer->id'>$trainer->patronymic</a></td>
            </tr>
                </tbody>
    </table><br>";
	}
}
}
else if (count($sportsmans) > 0)
{
 print " <h3 class='blue text-center'>Sportsmans list</h3>
    <table class='table table-hover'>
        <thead>
        <tr>
           <th>Surname</th>
            <th>Name</th>
            <th>Coach</th>
            <th>Year</th>
        </tr></thead>
        <tbody>";
		foreach ($sportsmans as $sportsman)
		{
        print "  <tr>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->surname</a></td>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->name</a></td>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->trainer_one</a></td>
                <td><a href='/sportsman/$sportsman->id'>$sportsman->birthday</a></td>
            </tr>
                </tbody>
    </table>";
		}	
}
else
{
	echo('<p style="text-align:center;"><br>Sorry, but we can\'t find such person</p>');
}

@endphp

            </div>
        </div>
    </div>
</div>
</div>
@endsection