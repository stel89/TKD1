@extends('layouts.app')

@section('content')
<div class="ua">
   <title>Створення семінару</title>
@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px; text-align:center;">
  <li class="list-group-item list-group-item-success" style="text-align:center">{{Session::get('message')}}</li>
</ul>
@endif
@if (count($errors) > 0)
 <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-danger">{{ $error }}</li>
@endforeach
</ul>
@endif
<div class="container">
        <hr>
    </div>

    <div id="main-tournament" class="container bg-gray regforms">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/competition/{{$competition->id}}/change_seminar">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="type" value="seminar">
		<input type="hidden" name="country" value="Украина">
            <div class="form-group">
                <label class="col-md-12 text-center"><h3>Назва</h3></label>
                <div class="col-md-12">
                    <input class="form-control" id="tourname" name="tourname" type="text" autofocus="" required="" value="{{$competition->tourname}}">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-12" for="date_from">Дата початку змагання</label>
                        <div class="col-md-12">
                            <input class="form-control" type="date" id="date_from" name="date_from" required="" value="{{$competition->date_from}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <label for="date_to">Дата кінця змагання</label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" id="date_to" name="date_to" type="date" required="" value="{{$competition->date_to}}">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
                            <div class="form-group">
                                <label class="col-md-12 text-center" for="region">Область</label>
                                <div class="col-md-12 ">
                                    <select class="form-control" id="region" value="" name="region" required=""><option value="АР Крим">АР Крим</option><option value="Вінницька область">Вінницька область</option><option value="Волинська область">Волинська область</option><option value="Дніпропетровська область">Дніпропетровська область</option><option value="Донецька область">Донецька область</option><option value="Житомирська область">Житомирська область</option><option value="Закарпатська область">Закарпатська область</option><option value="Запоріжська область">Запоріжська область</option><option value="Івано-Франківська область">Івано-Франківська область</option><option value="Київ">Київ</option><option value="Київська область">Київська область</option><option value="Кировоградська область">Кировоградська область</option><option value="Луганська область">Луганська область</option><option value="Львівськая область">Львівська область</option><option value="Ніколаєвська область">Ніколаєвська область</option><option value="Одесська область">Одесська область</option><option value="Полтавська область">Полтавская область</option><option value="Рівненська область">Рівненська область</option><option value="Сумська область">Сумська область</option><option value="Тернопільска область">Тернопільска область</option><option value="Харьківска область">Харьківска область</option><option value="Херсонська область">Херсонська область</option><option value="Хмельницька область">Хмельницька область</option><option value="Черкасська область">Черкасська область</option><option value="Чернигівська область">Чернигівска область</option><option value="Черновицька область">Черновицька область</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 text-center" for="town">Місто</label>
                                <div class="col-md-12 ">
                                    <select class="form-control" id="town" value="" name="town" required=""><option value="Аграрне">Аграрне</option><option value="Азовське">Азовське</option><option value="Алупка">Алупка</option><option value="Алушта">Алушта</option><option value="Армянськ">Армянськ</option><option value="Аерофлотський">Аерофлотський</option><option value="Багерово">Багерово</option><option value="Бахчисарай">Бахчисарай</option><option value="Белоглінка">Белоглінка</option><option value="Белогорськ">Белогорськ</option><option value="Ближнє">Ближнє</option><option value="Бондаренково">Бондаренково</option><option value="Верхнесадове">Верхнесадове</option><option value="Віліно">Віліно</option><option value="Виноградне">Виноградне</option><option value="Вітино">Вітино</option><option value="Войково">Войково</option><option value="Схід">Схід</option><option value="Гаспра">Гаспра</option><option value="Гвардійске">Гвардійске</option><option value="Геройске">Геройске</option><option value="Блакитний Залив">Блакитний Залив</option><option value="Гресовскій<">Гресовскій</option><option value="Гурзуф">Гурзуф</option><option value="Далеке">Далеке</option><option value="Джанкой">Джанкой</option><option value="Дніпровка">Дніпровка</option><option value="Добре">Добре</option><option value="Донське<">Донське</option><option value="Євпаторія">Євпаторія</option><option value="Желябівка">Желябівка</option><option value="Журавки">Журавки</option><option value="Заозерне">Заозерне</option><option value="Зуя">Зуя</option><option value="Інкерман">Інкерман</option><option value="Калинівка">Калинівка</option><option value="Каменоломня">Каменоломня</option><option value="Карьерне">Карьерне</option><option value="Кацивелі">Кацивелі</option><option value="Кача">Кача</option><option value="Керчь">Керчь</option><option value="Кирівске">Кирівске</option><option value="Коктебель">Коктебель</option><option value="Кольчугіно">Кольчугіно</option><option value="Комсомольское">Комсомольское</option><option value="Комсомольске">Комсомолське</option><option value="Червоногвардійске">Червоногвардійске</option><option value="Червонокам'янка">Червонокам'янка</option><option value="Червоноперекопськ">Червоноперекопськ</option><option value="Крымське">Крымське</option><option value="Куйбишево">Куйбишево</option><option value="Карпати">Карпати</option><option value="Леніно">Леніно</option><option value="Ливадия">Ливадія</option><option value="Мазанка">Мазанка</option><option value="Малорічанське">Малорічанське</option><option value="Малий маяк">Малий маяк</option><option value="Марфовка">Марфовка</option><option value="Массандра">Массандра</option><option value="Межводне">Межводне</option><option value="Мирне">Мирне</option><option value="Молодіжне">Молодіжне</option><option value="Мраморне">Мраморне</option><option value="Нижнєгорській">Нижнєгорській</option><option value="Никита">Никита</option><option value="Миколаєвка">Миколаєвка</option><option value="Новоозерне">Новоозерне</option><option value="Новоселівске">Новоселівске</option><option value="Новый Світ">Новый Світ</option><option value="Жовтневе">Жовтневе</option><option value="Олива">Олива</option><option value="Орджонікидзе">Орджонікидзе</option><option value="Ореанда">Ореанда</option><option value="Оріхово">Оріхово</option><option value="Останіно">Останіно</option><option value="Отрадне">Отрадне</option><option value="Паркове">Паркове</option><option value="Партеніт">Партеніт</option><option value="Первомайске">Первомайске</option><option value="Перевальне">Перевальне</option><option value="Перово">Перово</option><option value="Пісчане">Пісчане</option><option value="Петрівка">Петрівка</option><option value="Піонерське">Піонерське</option><option value="Пожарське">Пожарське</option><option value="Полтавка">Полтавка</option><option value="Понизовка">Понизовка</option><option value="Почтове">Почтове</option><option value="Прибрежне">Прибрежне</option><option value="Привітне">Привітне</option><option value="Приморський">Приморський</option><option value="Приозерне">Приозерне</option><option value="Роздольне">Роздольне</option><option value="Родникове">Родникове</option><option value="Садове">Садове</option><option value="Сакі">Сакі</option><option value="Санаторне">Санаторне</option><option value="Севастополь">Севастополь</option><option value="Сінокосне">Сінокосне</option><option value="Симеіз">Симеіз</option><option value="Симферополь">Симферополь</option><option value="Скелясте">Скелясте</option><option value="Скворцово">Скворцово</option><option value="Радянський">Радянський</option><option value="Радянське">Радянське</option><option value="Соляне">Соляне</option><option value="Старый Крим">Старый Крим</option><option value="Судак">Судак</option><option value="Тамбовка">Тамбовка</option><option value="Тилове">Тилове</option><option value="Топольне">Топольне</option><option value="Укромне">Укромне</option><option value="Феодосія">Феодосія</option><option value="Фонтани">Фонтани</option><option value="Форос">Форос</option><option value="Чайкіно">Чайкіно</option><option value="Черноморське">Черноморське</option><option value="Чистеньке">Чистеньке</option><option value="Чистопольє">Чистопольє</option><option value="Чкалово">Чкалово</option><option value="Щебетівка">Щебетівка</option><option value="Щьолкіно">Щьолкіно</option><option value="Ялта">Ялта</option><option value="Янтарне">Янтарне</option><option value="Ясное">Ясне</option></select>
                                </div>
</div>
            <div class="form-group">
                <label class="col-md-12 text-center">Адреса</label>
                <div class="col-md-12">
                    <input class="form-control" type="text" name="address" required="" value="{{$competition->adress}}">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-md-12 text-center">Опис</label>
                <div class="col-md-12">
                    <textarea rows="4" class="form-control" name="description" required="" >{{$competition->description}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 text-center">Програма змагань</label>
                <div class="col-md-12">
                    <textarea rows="8" class="form-control" name="program" required="">{{$competition->programm}}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 text-center">Контакти:</label>
                <div class="col-md-12">
                    <textarea rows="4" class="form-control" name="contacts" required="">{{$competition->contacts}}</textarea>
                </div>
            </div>

            <div class="form-group regforms" style="margin-left:45%">
                <div class="col-sm-2">
                    <button id="regComplete" type="submit" name="toursubmit" class="btn btn-lg btn-success">Змінити</button>
                </div>
            </div>
        </form>
    </div>
    </div>



<div class="en">
   <title>Create seminar</title>
@if(Session::has('message'))
	<ul class="list-group" style="width:50%; margin-left:auto; margin-right:auto; margin-top:10px; text-align:center;">
  <li class="list-group-item list-group-item-success">{{Session::get('message')}}</li>
</ul>
@endif
@if (count($errors) > 0)
 <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-danger">{{ $error }}</li>
@endforeach
</ul>
@endif
<div class="container">
        <hr>
    </div>

    <div id="main-tournament" class="container bg-gray regforms">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/competition/{{$competition->id}}/change_seminar">
		 <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="type" value="seminar">
				<input type="hidden" name="country" value="Украина">
            <div class="form-group">
                <label class="col-md-12 text-center"><h3>Title</h3></label>
                <div class="col-md-12">
                    <input class="form-control" id="tourname" name="tourname" type="text" autofocus="" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label class="col-md-12" for="date_from">Date from</label>
                        <div class="col-md-12">
                            <input class="form-control" type="date" id="date_from" name="date_from" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-12">
                            <label for="date_to">Date to</label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" id="date_to" name="date_to" type="date" required="">
                        </div>
                    </div>
                </div>
            </div>
            <hr>
                            <div class="form-group">
                                <label class="col-md-12 text-center" for="region">Region</label>
                                <div class="col-md-12 ">
                                    <select class="form-control" id="region" value="" name="region" required=""><option value="Autonomous Republic of Crimea">Autonomous Republic of Crimea</option><option value="Vinnytsia oblast">Vinnytsia oblast</option><option value="Volyn oblast">Volyn oblast</option><option value="Dnipropetrovsk oblast">Dnipropetrovsk oblast</option><option value="Donetsk oblast">Donetsk oblast</option><option value="Zhytomyr oblast">Zhytomyr oblast</option><option value="Закарпатская область">Закарпатская область</option><option value="Zakarpattia oblast">Zakarpattia oblast</option><option value="Ivano-Frankivsk oblast">Ivano-Frankivsk oblast</option><option value="Kyiv oblast">Kyiv oblast</option><option value="Kirovohrad oblast">Kirovohrad oblast</option><option value="Luhansk oblast">Luhansk oblast</option><option value="Lviv oblast">Lviv oblast</option><option value="Mykolaiv oblast">Mykolaiv oblast</option><option value="Odesa oblast">Odesa oblast</option><option value="Poltava oblast">Poltava oblast</option><option value="Rivne oblast">Rivne oblast</option><option value="Sumy oblast">Sumy oblast</option><option value="Ternopil oblast">Ternopil oblast</option><option value="Kharkiv oblast">Kharkiv oblast</option><option value="Kherson oblast">Kherson oblast</option><option value="Khmelnytskyi oblast">Khmelnytskyi oblast</option><option value="Cherkasy oblast">Cherkasy oblast</option><option value="Chernihiv oblast">Chernihiv oblast</option><option value="Chernivtsi oblast">Chernivtsi oblast</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 text-center" for="town">Town</label>
                                <div class="col-md-12 ">
                                    <select class="form-control" id="town" value="" name="town" required=""><option value="Agrarne">Agrarne</option><option value="Azovskoe">Azovskoe</option><option value="Alupka">Alupka</option><option value="Alushta">Alushta</option><option value="Armyansk">Armyansk</option><option value="Aeroflotskiy">Aeroflotskiy</option><option value="Bagerovo">Bagerovo</option><option value="Bahchisaray">Bahchisaray</option><option value="Beloglinka">Beloglinka</option><option value="Belogorsk">Belogorsk</option><option value="Blignee">Blignee</option><option value="Bondarenkovo">Bondarenkovo</option><option value="Verhnesadovoe">Verhnesadovoe</option><option value="Вилино">Vilino</option><option value="Vinogradnoe">Vinogradnoe</option><option value="Vitino">Vitino</option><option value="Voikovo">Voikovo</option><option value="Voshod">Voshod</option><option value="Gaspra">Gaspra</option><option value="Gvardeiskoe">Gvardeiskoe</option><option value="Geroiskoe">Geroiskoe</option><option value="Goluboy zaliv">Goluboy zaliv</option><option value="Gresovskiy">Gresovskiy</option><option value="Gurzuf">Gurzuf</option><option value="Dalekoe">Dalekoe</option><option value="Dghankoi">Dghankoi</option><option value="Dneprovka">Dneprovka</option><option value="Dobroe">Dobroe</option><option value="Donskoe<">Donskoe</option><option value="Evpatoriya">Evpatoriya</option><option value="Gelyabovka">Gelyabovka</option><option value="Guravki">Guravki</option><option value="Zaozernoe">Zaozernoe</option><option value="Zuya">Zuya</option><option value="Inkerman">Inkerman</option><option value="Kalinovka">Kalinovka</option><option value="Kamenolomnya">Kamenolomnya</option><option value="Kariernoe">Kariernoe</option><option value="Kaciveli">Kaciveli</option><option value="Kacha">Kacha</option><option value="Kerch">Kerch</option><option value="Kirovskoe">Kirovskoe</option><option value="Koktebel">Koktebel</option><option value="Kolchugino">Kolchugino</option><option value="Komsomolskoe">Komsomolskoe</option><option value="Komsomolskoe">c</option><option value="Krasnogvardeiskoe">Krasnogvardeiskoe</option><option value="Krasnokamenka">Krasnokamenka</option><option value="Krasnoperekopsk">Krasnoperekopsk</option><option value="Krimskoe">Krimskoe</option><option value="Kuybishevo">Kuybishevo</option><option value="Karpati">Karpati</option><option value="Lenino">Lenino</option><option value="Livadiya">Livadiya</option><option value="Mazanka">Mazanka</option><option value="Malorechenskoe">Malorechenskoe</option><option value="Maliy mayak">Maliy mayak</option><option value="Marfovka">Marfovka</option><option value="Massandra">Massandra</option><option value="Megvodnoe">Megvodnoe</option><option value="Mirnoe">Mirnoe</option><option value="Molodegnoe">Molodegnoe</option><option value="Mramornoe">Mramornoe</option><option value="Nignegorskiy">Nignegorskiy</option><option value="Nikita">Nikita</option><option value="Nikolayevka">Nikolayevka</option><option value="Novoozernoe">Novoozernoe</option><option value="Novoselovskoe">Новоселовское</option><option value="Novoselskoe">Novoselskoe</option><option value="Noviy svet">Noviy svet</option><option value="Oktyabirskoe">Oktyabirskoe</option><option value="Oliva">Oliva</option><option value="Ordgonikidze">Ordgonikidze</option><option value="Oreanda">Oreanda</option><option value="Orehovo">Orehovo</option><option value="Ostanino">Ostanino</option><option value="Otradnoe">Otradnoe</option><option value="Parkovoe">Parkovoe</option><option value="Partenit">Partenit</option><option value="Pervomayskoe">Pervomayskoe</option><option value="Perevalnoe">Perevalnoe</option><option value="Perovo">Perovo</option><option value="Peschanoe">Peschanoe</option><option value="Petrovka">Petrovka</option><option value="Pionerskoe">Pionerskoe</option><option value="Pozgarskoe">Pozgarskoe</option><option value="Poltavka">Poltavka</option><option value="Ponizovka">Ponizovka</option><option value="Pochtovoe">Pochtovoe</option><option value="Pribrezgnoe">Pribrezgnoe</option><option value="Privetnoe">Privetnoe</option><option value="Primorskiy">Primorskiy</option><option value="Priozernoe">Priozernoe</option><option value="Razdolnoe">Razdolnoe</option><option value="Rodnikovoe">Rodnikovoe</option><option value="Sadovoe">Sadovoe</option><option value="Saki">Saki</option><option value="Sanatornoe">Sanatornoe</option><option value="Sevastopol">Sevastopol</option><option value="Senokosnoe">Senokosnoe</option><option value="Simeiz">Simeiz</option><option value="Simferopol">Simferopol</option><option value="Skalistoe">Skalistoe</option><option value="Skvorcovo">Skvorcovo</option><option value="Sovetskiy">Sovetskiy</option><option value="Sovetskoe">Sovetskoe</option><option value="Solyanoe">Solyanoe</option><option value="Stariy Krim">Stariy Krim</option><option value="Sudak">Sudak</option><option value="Tambovka">Tambovka</option><option value="Tiplovoe">Tiplovoe</option><option value="Topolnoe">Topolnoe</option><option value="Ukromnoe">Ukromnoe</option><option value="Feodosiya">Feodosiya</option><option value="Fontani">Fontani</option><option value="Foros">Foros</option><option value="Chaikino">Chaikino</option><option value="Chernomorskoe">Chernomorskoe</option><option value="Chistenkoe">Chistenkoe</option><option value="Chistopolie">Chistopolie</option><option value="Chkalovo">Chkalovo</option><option value="Shebetovka">Shebetovka</option><option value="Shelkino">Shelkino</option><option value="Yalta">Yalta</option><option value="Yantarnoe">Yantarnoe</option><option value="Yasnoe">Yasnoe</option></select>
                                </div>
                            </div>

            <div class="form-group">
                <label class="col-md-12 text-center">Adress</label>
                <div class="col-md-12">
                    <input class="form-control" type="text" name="address" required="">
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-md-12 text-center">Description</label>
                <div class="col-md-12">
                    <textarea rows="4" class="form-control" name="description" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 text-center">Tournament Level</label>
                <div class="col-md-12">
                    <textarea rows="8" class="form-control" name="program" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12 text-center">Contacts:</label>
                <div class="col-md-12">
                    <textarea rows="4" class="form-control" name="contacts" required=""></textarea>
                </div>
            </div>

            <div class="form-group regforms" style="margin-left:45%">
                <div class="col-sm-2">
                    <button id="regComplete" type="submit" name="toursubmit" class="btn btn-lg btn-success ">Change</button>
                </div>
            </div>
        </form>
    </div>
    </div>

	@endsection