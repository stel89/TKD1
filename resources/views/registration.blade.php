@extends('layouts.app')

@section('content')
  <title>Реєстрація тренера</title>

<div id="content" class="container">
    <div class="row">
        <div class="col-md-8">
                            <ul class="nav nav-tabs" role="tablist">
                    <li class="active ua"><a href="http://mytkd.in.ua/registration/#tab1" role="tab" data-toggle="tab">Реєстрація тренера</a></li>
					<li class="active en"><a href="http://mytkd.in.ua/registration/#tab1" role="tab" data-toggle="tab">Coach registration</a></li>
                    <li class="ua"><a href="http://mytkd.in.ua/registration/#tab2" role="tab" data-toggle="tab">Реєстрація судді</a></li>
					<li class="en"><a href="http://mytkd.in.ua/registration/#tab2" role="tab" data-toggle="tab">Judge registration</a></li>
                    <li class="ua"><a href="http://mytkd.in.ua/registration/#tab3" role="tab" data-toggle="tab">Реєстрація продавця</a></li>
					<li class="en"><a href="http://mytkd.in.ua/registration/#tab3" role="tab" data-toggle="tab">Seller registration</a></li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane fade in" id="tab1">

                        <h3 class="gray text-center ua">Реєстрація тренера</h3>
						<h3 class="gray text-center en">Coach registration</h3>


                        <form class="form-horizontal regforms ua" method="post" enctype="multipart/form-data" action="{{action('RegisterController@store')}}">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="role" value="Тренер">
						<input type="hidden" name="country1" value="Ukraine">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email1">Email</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="email" autocomplete="off" id="email1" name="email1" placeholder="E-mail" autofocus="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label ua" for="passw">Пароль</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="password" autocomplete="off" id="passw1" name="passw1" value="" placeholder="Пароль" required="">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name1">Ім'я</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="name1" name="name1" value="" placeholder="Ім&#39;я" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="surname1">Прізвище</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="surname1" name="surname1" value="" placeholder="Прізвище" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="patronymic1">По-батькові</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="patronymic1" name="patronymic1" value="" placeholder="По-батькові" required="">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="region">Область</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="region1" name="region1" required=""><option value="АР Крым">АР Крым</option><option value="Винницкая область">Винницкая область</option><option value="Волынская область">Волынская область</option><option value="Днепропетровская область">Днепропетровская область</option><option value="Донецкая область">Донецкая область</option><option value="Житомирская область">Житомирская область</option><option value="Закарпатская область">Закарпатская область</option><option value="Запорожская область">Запорожская область</option><option value="Ивано-Франковская область">Ивано-Франковская область</option><option value="Київ">Київ</option><option value="Київська область">Київська область</option><option value="Кировоградская область">Кировоградская область</option><option value="Луганская область">Луганская область</option><option value="Львовская область">Львовская область</option><option value="Николаевская область">Николаевская область</option><option value="Одесская область">Одесская область</option><option value="Полтавская область">Полтавская область</option><option value="Ровенская область">Ровенская область</option><option value="Сумская область">Сумская область</option><option value="Тернопольская область">Тернопольская область</option><option value="Харьковская область">Харьковская область</option><option value="Херсонская область">Херсонская область</option><option value="Хмельницкая область">Хмельницкая область</option><option value="Черкасская область">Черкасская область</option><option value="Черниговская область">Черниговская область</option><option value="Черновицкая область">Черновицкая область</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="town">Місто</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="town1" name="town1" required=""><option value="Аграрное">Аграрное</option><option value="Азовское">Азовское</option><option value="Алупка">Алупка</option><option value="Алушта">Алушта</option><option value="Армянск">Армянск</option><option value="Аэрофлотский">Аэрофлотский</option><option value="Багерово">Багерово</option><option value="Бахчисарай">Бахчисарай</option><option value="Белоглинка">Белоглинка</option><option value="Белогорск">Белогорск</option><option value="Ближнее">Ближнее</option><option value="Бондаренково">Бондаренково</option><option value="Верхнесадовое">Верхнесадовое</option><option value="Вилино">Вилино</option><option value="Виноградное">Виноградное</option><option value="Витино">Витино</option><option value="Войково">Войково</option><option value="Восход">Восход</option><option value="Гаспра">Гаспра</option><option value="Гвардейское">Гвардейское</option><option value="Геройское">Геройское</option><option value="Голубой Залив">Голубой Залив</option><option value="Грэсовский<">Грэсовский</option><option value="Гурзуф">Гурзуф</option><option value="Далекое">Далекое</option><option value="Джанкой">Джанкой</option><option value="Днепровка">Днепровка</option><option value="Доброе">Доброе</option><option value="Донское<">Донское</option><option value="Евпатория">Евпатория</option><option value="Желябовка">Желябовка</option><option value="Журавки">Журавки</option><option value="Заозерное">Заозерное</option><option value="Зуя">Зуя</option><option value="Инкерман">Инкерман</option><option value="Калиновка">Калиновка</option><option value="Каменоломня">Каменоломня</option><option value="Карьерное">Карьерное</option><option value="Кацивели">Кацивели</option><option value="Кача">Кача</option><option value="Керчь">Керчь</option><option value="Кировское">Кировское</option><option value="Коктебель">Коктебель</option><option value="Кольчугино">Кольчугино</option><option value="Комсомольское">Комсомольское</option><option value="Комсомольское">c</option><option value="Красногвардейское">Красногвардейское</option><option value="Краснокаменка">Краснокаменка</option><option value="Красноперекопск">Красноперекопск</option><option value="Крымское">Крымское</option><option value="Куйбышево">Куйбышево</option><option value="Карпаты">Карпаты</option><option value="Ленино">Ленино</option><option value="Ливадия">Ливадия</option><option value="Мазанка">Мазанка</option><option value="Малореченское">Малореченское</option><option value="Малый маяк">Малый маяк</option><option value="Марфовка">Марфовка</option><option value="Массандра">Массандра</option><option value="Межводное">Межводное</option><option value="Мирное">Мирное</option><option value="Молодежное">Молодежное</option><option value="Мраморное">Мраморное</option><option value="Нижнегорский">Нижнегорский</option><option value="Никита">Никита</option><option value="Николаевка">Николаевка</option><option value="Новоозерное">Новоозерное</option><option value="Новоселовское">Новоселовское</option><option value="Новосельское">Новосельское</option><option value="Новый Свет">Новый Свет</option><option value="Октябрьское">Октябрьское</option><option value="Олива">Олива</option><option value="Орджоникидзе">Орджоникидзе</option><option value="Ореанда">Ореанда</option><option value="Орехово">Орехово</option><option value="Останино">Останино</option><option value="Отрадное">Отрадное</option><option value="Парковое">Парковое</option><option value="Партенит">Партенит</option><option value="Первомайское">Первомайское</option><option value="Перевальное">Перевальное</option><option value="Перово">Перово</option><option value="Песчаное">Песчаное</option><option value="Петровка">Петровка</option><option value="Пионерское">Пионерское</option><option value="Пожарское">Пожарское</option><option value="Полтавка">Полтавка</option><option value="Понизовка">Понизовка</option><option value="Почтовое">Почтовое</option><option value="Прибрежное">Прибрежное</option><option value="Приветное">Приветное</option><option value="Приморский">Приморский</option><option value="Приозерное">Приозерное</option><option value="Раздольное">Раздольное</option><option value="Родниковое">Родниковое</option><option value="Садовое">Садовое</option><option value="Саки">Саки</option><option value="Санаторное">Санаторное</option><option value="Севастополь">Севастополь</option><option value="Сенокосное">Сенокосное</option><option value="Симеиз">Симеиз</option><option value="Симферополь">Симферополь</option><option value="Скалистое">Скалистое</option><option value="Скворцово">Скворцово</option><option value="Советский">Советский</option><option value="Советское">Советское</option><option value="Соляное">Соляное</option><option value="Старый Крым">Старый Крым</option><option value="Судак">Судак</option><option value="Тамбовка">Тамбовка</option><option value="Тиловое">Тиловое</option><option value="Топольное">Топольное</option><option value="Укромное">Укромное</option><option value="Феодосия">Феодосия</option><option value="Фонтаны">Фонтаны</option><option value="Форос">Форос</option><option value="Чайкино">Чайкино</option><option value="Черноморское">Черноморское</option><option value="Чистенькое">Чистенькое</option><option value="Чистополье">Чистополье</option><option value="Чкалово">Чкалово</option><option value="Щебетовка">Щебетовка</option><option value="Щелкино">Щелкино</option><option value="Ялта">Ялта</option><option value="Янтарное">Янтарное</option><option value="Ясное">Ясное</option></select>
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="org">Організація</label>
                                <div class="col-sm-9  8">
                                    <input class="form-control" list="org1" name="org1" required="">
                                    <datalist id="org1"><option value="KFD"></option><option value="Tkd"></option><option value="ГО"></option><option value="деф-тхэквондо(ВТФ)"></option><option value="КиЇвський обласний осередок ВТФ"></option><option value="МОН"></option><option value="ЧОФОТ"></option></datalist>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="sex">Стать</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="sex1" name="sex1" required="">
                                        <option value="Чоловіча">Чоловіча</option>
                                        <option value="Жіноча">Жіноча</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="fst1">ФСТ</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="text" value="" name="fst1" required="">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="avatar">Аватар (желательно квадратный) <small class="danger">обов'язково</small></label>
                                <div class="col-sm-9">
                                    <input required="" class="form-control" type="file" id="avatar1" name="avatar1">
                                </div>
                            </div>
							

                            <div class="form-group">
                                <div class="col-sm-11"><center>
                                    <button id="regComplete" type="submit" class="btn btn-success btn-lg" style="padding-left:20px;">Зареєструватися!</button>
                                </div></center>
                            </div>

                        </form>
                    <!--------------------------------------------------------English----------------------------------------------------------------------->
					
					 <form class="form-horizontal regforms en" method="post" enctype="multipart/form-data" action="{{action('RegisterController@store')}}">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="role" value="Тренер">
						<input type="hidden" name="country1" value="Ukraine">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email1">Email</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="email" autocomplete="off" id="email1" name="email1" placeholder="E-mail" autofocus="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="passw1">Password</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="password" autocomplete="off" id="passw1" name="passw1" value="" placeholder="Password" required="">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name1">Name</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" id="name1" name="name1" value="" placeholder="Name" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="surname1">Surname</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="surname1" name="surname1" value="" placeholder="Surname" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="patronymic1">Middle name</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="patronymic1" name="patronymic1" value="" placeholder="Patronymic" required="">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="region1">Region</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="region1" value="" name="region1" required=""><option value="Autonomous Republic of Crimea">Autonomous Republic of Crimea</option><option value="Vinnytsia oblast">Vinnytsia oblast</option><option value="Volyn oblast">Volyn oblast</option><option value="Dnipropetrovsk oblast">Dnipropetrovsk oblast</option><option value="Donetsk oblast">Donetsk oblast</option><option value="Zhytomyr oblast">Zhytomyr oblast</option><option value="Закарпатская область">Закарпатская область</option><option value="Zakarpattia oblast">Zakarpattia oblast</option><option value="Ivano-Frankivsk oblast">Ivano-Frankivsk oblast</option><option value="Kyiv oblast">Kyiv oblast</option><option value="Kirovohrad oblast">Kirovohrad oblast</option><option value="Luhansk oblast">Luhansk oblast</option><option value="Lviv oblast">Lviv oblast</option><option value="Mykolaiv oblast">Mykolaiv oblast</option><option value="Odesa oblast">Odesa oblast</option><option value="Poltava oblast">Poltava oblast</option><option value="Rivne oblast">Rivne oblast</option><option value="Sumy oblast">Sumy oblast</option><option value="Ternopil oblast">Ternopil oblast</option><option value="Kharkiv oblast">Kharkiv oblast</option><option value="Kherson oblast">Kherson oblast</option><option value="Khmelnytskyi oblast">Khmelnytskyi oblast</option><option value="Cherkasy oblast">Cherkasy oblast</option><option value="Chernihiv oblast">Chernihiv oblast</option><option value="Chernivtsi oblast">Chernivtsi oblast</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="town1">Town</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="town1" value="" name="town1" required=""><option value="Agrarne">Agrarne</option><option value="Azovskoe">Azovskoe</option><option value="Alupka">Alupka</option><option value="Alushta">Alushta</option><option value="Armyansk">Armyansk</option><option value="Aeroflotskiy">Aeroflotskiy</option><option value="Bagerovo">Bagerovo</option><option value="Bahchisaray">Bahchisaray</option><option value="Beloglinka">Beloglinka</option><option value="Belogorsk">Belogorsk</option><option value="Blignee">Blignee</option><option value="Bondarenkovo">Bondarenkovo</option><option value="Verhnesadovoe">Verhnesadovoe</option><option value="Вилино">Vilino</option><option value="Vinogradnoe">Vinogradnoe</option><option value="Vitino">Vitino</option><option value="Voikovo">Voikovo</option><option value="Voshod">Voshod</option><option value="Gaspra">Gaspra</option><option value="Gvardeiskoe">Gvardeiskoe</option><option value="Geroiskoe">Geroiskoe</option><option value="Goluboy zaliv">Goluboy zaliv</option><option value="Gresovskiy">Gresovskiy</option><option value="Gurzuf">Gurzuf</option><option value="Dalekoe">Dalekoe</option><option value="Dghankoi">Dghankoi</option><option value="Dneprovka">Dneprovka</option><option value="Dobroe">Dobroe</option><option value="Donskoe<">Donskoe</option><option value="Evpatoriya">Evpatoriya</option><option value="Gelyabovka">Gelyabovka</option><option value="Guravki">Guravki</option><option value="Zaozernoe">Zaozernoe</option><option value="Zuya">Zuya</option><option value="Inkerman">Inkerman</option><option value="Kalinovka">Kalinovka</option><option value="Kamenolomnya">Kamenolomnya</option><option value="Kariernoe">Kariernoe</option><option value="Kaciveli">Kaciveli</option><option value="Kacha">Kacha</option><option value="Kerch">Kerch</option><option value="Kirovskoe">Kirovskoe</option><option value="Koktebel">Koktebel</option><option value="Kolchugino">Kolchugino</option><option value="Komsomolskoe">Komsomolskoe</option><option value="Komsomolskoe">c</option><option value="Krasnogvardeiskoe">Krasnogvardeiskoe</option><option value="Krasnokamenka">Krasnokamenka</option><option value="Krasnoperekopsk">Krasnoperekopsk</option><option value="Krimskoe">Krimskoe</option><option value="Kuybishevo">Kuybishevo</option><option value="Karpati">Karpati</option><option value="Lenino">Lenino</option><option value="Livadiya">Livadiya</option><option value="Mazanka">Mazanka</option><option value="Malorechenskoe">Malorechenskoe</option><option value="Maliy mayak">Maliy mayak</option><option value="Marfovka">Marfovka</option><option value="Massandra">Massandra</option><option value="Megvodnoe">Megvodnoe</option><option value="Mirnoe">Mirnoe</option><option value="Molodegnoe">Molodegnoe</option><option value="Mramornoe">Mramornoe</option><option value="Nignegorskiy">Nignegorskiy</option><option value="Nikita">Nikita</option><option value="Nikolayevka">Nikolayevka</option><option value="Novoozernoe">Novoozernoe</option><option value="Novoselovskoe">Новоселовское</option><option value="Novoselskoe">Novoselskoe</option><option value="Noviy svet">Noviy svet</option><option value="Oktyabirskoe">Oktyabirskoe</option><option value="Oliva">Oliva</option><option value="Ordgonikidze">Ordgonikidze</option><option value="Oreanda">Oreanda</option><option value="Orehovo">Orehovo</option><option value="Ostanino">Ostanino</option><option value="Otradnoe">Otradnoe</option><option value="Parkovoe">Parkovoe</option><option value="Partenit">Partenit</option><option value="Pervomayskoe">Pervomayskoe</option><option value="Perevalnoe">Perevalnoe</option><option value="Perovo">Perovo</option><option value="Peschanoe">Peschanoe</option><option value="Petrovka">Petrovka</option><option value="Pionerskoe">Pionerskoe</option><option value="Pozgarskoe">Pozgarskoe</option><option value="Poltavka">Poltavka</option><option value="Ponizovka">Ponizovka</option><option value="Pochtovoe">Pochtovoe</option><option value="Pribrezgnoe">Pribrezgnoe</option><option value="Privetnoe">Privetnoe</option><option value="Primorskiy">Primorskiy</option><option value="Priozernoe">Priozernoe</option><option value="Razdolnoe">Razdolnoe</option><option value="Rodnikovoe">Rodnikovoe</option><option value="Sadovoe">Sadovoe</option><option value="Saki">Saki</option><option value="Sanatornoe">Sanatornoe</option><option value="Sevastopol">Sevastopol</option><option value="Senokosnoe">Senokosnoe</option><option value="Simeiz">Simeiz</option><option value="Simferopol">Simferopol</option><option value="Skalistoe">Skalistoe</option><option value="Skvorcovo">Skvorcovo</option><option value="Sovetskiy">Sovetskiy</option><option value="Sovetskoe">Sovetskoe</option><option value="Solyanoe">Solyanoe</option><option value="Stariy Krim">Stariy Krim</option><option value="Sudak">Sudak</option><option value="Tambovka">Tambovka</option><option value="Tiplovoe">Tiplovoe</option><option value="Topolnoe">Topolnoe</option><option value="Ukromnoe">Ukromnoe</option><option value="Feodosiya">Feodosiya</option><option value="Fontani">Fontani</option><option value="Foros">Foros</option><option value="Chaikino">Chaikino</option><option value="Chernomorskoe">Chernomorskoe</option><option value="Chistenkoe">Chistenkoe</option><option value="Chistopolie">Chistopolie</option><option value="Chkalovo">Chkalovo</option><option value="Shebetovka">Shebetovka</option><option value="Shelkino">Shelkino</option><option value="Yalta">Yalta</option><option value="Yantarnoe">Yantarnoe</option><option value="Yasnoe">Yasnoe</option></select>
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="org">Organization</label>
                                <div class="col-sm-9  8">
                                    <input class="form-control" list="org1" name="org1" required="" value="">
                                    <datalist id="org1"><option value="KFD">KFD</option><option value="Tkd">TKD</option><option value="ГО">ГО</option><option value="деф-тхэквондо(ВТФ)">деф-тхэквондо(ВТФ)</option><option value="КиЇвський обласний осередок ВТФ">КиЇвський обласний осередок ВТФ</option><option value="МОН">МОН</option><option value="ЧОФОТ">ЧОФОТ</option></datalist>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="sex">Sex</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="sex1" name="sex1" required="" value="Gender">
                                        <option value="Чоловіча">Male</option>
                                        <option value="Жіноча">Feamale</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="fst1">FST</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="text" name="fst1" required="" value="Fst">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="avatar1">Avatar (Required, prefer square form)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="avatar1" name="avatar1" >
                                </div>
                            </div>				
							

								<div class="form-group">
                                <div class="col-sm-11"><center>
                                    <button id="regComplete" type="submit" class="btn btn-success btn-lg" >Register!</button>
                                </div></center>
                            </div>


                        </form>
					
					</div>
                    <div class="tab-pane fade" id="tab2">
                        <h3 class="gray text-center ua">Реєстрація судді</h3>
						<h3 class="gray text-center en">Judge registration</h3>

                        <form class="form-horizontal regforms ua" method="post" enctype="multipart/form-data" action="{{action('RegisterController@store2')}}">
						<input type="hidden" name="role" value="Суддя">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="country2" value="Ukraine">
						
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email2">Email</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="email" id="email2" name="email2" placeholder="E-mail" value="" autofocus="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="passw2">Пароль</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="password" id="passw2" name="passw2" value="" placeholder="Пароль" required="">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="nam2e">Ім'я</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="name2" name="name2" value="" placeholder="Ім&#39;я" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="surname2">Прізвище</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="surname2" name="surname2" value="" placeholder="Прізвище" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="patronymic2">По-батькові</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="patronymic2" name="patronymic2" value="" placeholder="По-батькові" required="">
                                </div>
                            </div>

                            <br>


                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="region2">Область</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="region2" name="region2" required=""><option value="АР Крым">АР Крым</option><option value="Винницкая область">Винницкая область</option><option value="Волынская область">Волынская область</option><option value="Днепропетровская область">Днепропетровская область</option><option value="Донецкая область">Донецкая область</option><option value="Житомирская область">Житомирская область</option><option value="Закарпатская область">Закарпатская область</option><option value="Запорожская область">Запорожская область</option><option value="Ивано-Франковская область">Ивано-Франковская область</option><option value="Київ">Київ</option><option value="Київська область">Київська область</option><option value="Кировоградская область">Кировоградская область</option><option value="Луганская область">Луганская область</option><option value="Львовская область">Львовская область</option><option value="Николаевская область">Николаевская область</option><option value="Одесская область">Одесская область</option><option value="Полтавская область">Полтавская область</option><option value="Ровенская область">Ровенская область</option><option value="Сумская область">Сумская область</option><option value="Тернопольская область">Тернопольская область</option><option value="Харьковская область">Харьковская область</option><option value="Херсонская область">Херсонская область</option><option value="Хмельницкая область">Хмельницкая область</option><option value="Черкасская область">Черкасская область</option><option value="Черниговская область">Черниговская область</option><option value="Черновицкая область">Черновицкая область</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="town2">Місто</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="town2" name="town2" required=""><option value="Аграрное">Аграрное</option><option value="Азовское">Азовское</option><option value="Алупка">Алупка</option><option value="Алушта">Алушта</option><option value="Армянск">Армянск</option><option value="Аэрофлотский">Аэрофлотский</option><option value="Багерово">Багерово</option><option value="Бахчисарай">Бахчисарай</option><option value="Белоглинка">Белоглинка</option><option value="Белогорск">Белогорск</option><option value="Ближнее">Ближнее</option><option value="Бондаренково">Бондаренково</option><option value="Верхнесадовое">Верхнесадовое</option><option value="Вилино">Вилино</option><option value="Виноградное">Виноградное</option><option value="Витино">Витино</option><option value="Войково">Войково</option><option value="Восход">Восход</option><option value="Гаспра">Гаспра</option><option value="Гвардейское">Гвардейское</option><option value="Геройское">Геройское</option><option value="Голубой Залив">Голубой Залив</option><option value="Грэсовский<">Грэсовский</option><option value="Гурзуф">Гурзуф</option><option value="Далекое">Далекое</option><option value="Джанкой">Джанкой</option><option value="Днепровка">Днепровка</option><option value="Доброе">Доброе</option><option value="Донское<">Донское</option><option value="Евпатория">Евпатория</option><option value="Желябовка">Желябовка</option><option value="Журавки">Журавки</option><option value="Заозерное">Заозерное</option><option value="Зуя">Зуя</option><option value="Инкерман">Инкерман</option><option value="Калиновка">Калиновка</option><option value="Каменоломня">Каменоломня</option><option value="Карьерное">Карьерное</option><option value="Кацивели">Кацивели</option><option value="Кача">Кача</option><option value="Керчь">Керчь</option><option value="Кировское">Кировское</option><option value="Коктебель">Коктебель</option><option value="Кольчугино">Кольчугино</option><option value="Комсомольское">Комсомольское</option><option value="Комсомольское">c</option><option value="Красногвардейское">Красногвардейское</option><option value="Краснокаменка">Краснокаменка</option><option value="Красноперекопск">Красноперекопск</option><option value="Крымское">Крымское</option><option value="Куйбышево">Куйбышево</option><option value="Карпаты">Карпаты</option><option value="Ленино">Ленино</option><option value="Ливадия">Ливадия</option><option value="Мазанка">Мазанка</option><option value="Малореченское">Малореченское</option><option value="Малый маяк">Малый маяк</option><option value="Марфовка">Марфовка</option><option value="Массандра">Массандра</option><option value="Межводное">Межводное</option><option value="Мирное">Мирное</option><option value="Молодежное">Молодежное</option><option value="Мраморное">Мраморное</option><option value="Нижнегорский">Нижнегорский</option><option value="Никита">Никита</option><option value="Николаевка">Николаевка</option><option value="Новоозерное">Новоозерное</option><option value="Новоселовское">Новоселовское</option><option value="Новосельское">Новосельское</option><option value="Новый Свет">Новый Свет</option><option value="Октябрьское">Октябрьское</option><option value="Олива">Олива</option><option value="Орджоникидзе">Орджоникидзе</option><option value="Ореанда">Ореанда</option><option value="Орехово">Орехово</option><option value="Останино">Останино</option><option value="Отрадное">Отрадное</option><option value="Парковое">Парковое</option><option value="Партенит">Партенит</option><option value="Первомайское">Первомайское</option><option value="Перевальное">Перевальное</option><option value="Перово">Перово</option><option value="Песчаное">Песчаное</option><option value="Петровка">Петровка</option><option value="Пионерское">Пионерское</option><option value="Пожарское">Пожарское</option><option value="Полтавка">Полтавка</option><option value="Понизовка">Понизовка</option><option value="Почтовое">Почтовое</option><option value="Прибрежное">Прибрежное</option><option value="Приветное">Приветное</option><option value="Приморский">Приморский</option><option value="Приозерное">Приозерное</option><option value="Раздольное">Раздольное</option><option value="Родниковое">Родниковое</option><option value="Садовое">Садовое</option><option value="Саки">Саки</option><option value="Санаторное">Санаторное</option><option value="Севастополь">Севастополь</option><option value="Сенокосное">Сенокосное</option><option value="Симеиз">Симеиз</option><option value="Симферополь">Симферополь</option><option value="Скалистое">Скалистое</option><option value="Скворцово">Скворцово</option><option value="Советский">Советский</option><option value="Советское">Советское</option><option value="Соляное">Соляное</option><option value="Старый Крым">Старый Крым</option><option value="Судак">Судак</option><option value="Тамбовка">Тамбовка</option><option value="Тиловое">Тиловое</option><option value="Топольное">Топольное</option><option value="Укромное">Укромное</option><option value="Феодосия">Феодосия</option><option value="Фонтаны">Фонтаны</option><option value="Форос">Форос</option><option value="Чайкино">Чайкино</option><option value="Черноморское">Черноморское</option><option value="Чистенькое">Чистенькое</option><option value="Чистополье">Чистополье</option><option value="Чкалово">Чкалово</option><option value="Щебетовка">Щебетовка</option><option value="Щелкино">Щелкино</option><option value="Ялта">Ялта</option><option value="Янтарное">Янтарное</option><option value="Ясное">Ясное</option></select>
                                </div>
                            </div>

                            <br>
								              <div class="form-group">
                                <label class="col-sm-2 control-label" for="cat">Категорія</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="cat" name="cat" required="" value="">
                                        <option value="Юний суддя">Юний суддя</option><option value="Суддя">Суддя</option><option value="3 категорія">3 категорія</option><option value="2 категорія">2 категорія</option><option value="1 категорія">1 категорія</option><option value="Національна">Національна</option><option value="Міжнародна">Міжнародна</option>                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="sex">Стать</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="sex2" name="sex2" required="" value="">
                                        <option value="Чоловіча">Чоловіча</option>
                                        <option value="Жіноча">Жіноча</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="avatar">Аватар (желательно квадратный) <small class="danger">обов'язково</small></label>
                                <div class="col-sm-9">
                                    <input required="" class="form-control" type="file" id="avatar2" name="avatar2">
                                </div>
                            </div>

							
                            <div class="form-group">
                                <div class="col-sm-11"><center>
                                    <button id="regComplete" type="submit" class="btn btn-success btn-lg" >Зареєструватися!</button>
                                </div></center>
                            </div>

                        </form>
						
<!----------------------------------------------------------------English------------------------------------------------------------------------------------------------------>
<form class="form-horizontal regforms en" method="post" enctype="multipart/form-data" action="{{action('RegisterController@store2')}}">
						<input type="hidden" name="role" value="Суддя">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="country2" value="Ukraine">
						
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email2">Email</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="email" id="email2" name="email2" placeholder="E-mail" value="" autofocus="" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="passw2">Password</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="password" id="passw2" name="passw2" value="" placeholder="Password" required="">
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="nam2e">Name</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="name2" name="name2" value="" placeholder="Name" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="surname2">Surname</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="surname2" name="surname2" value="" placeholder="Surname" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="patronymic2">Middle name</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="patronymic2" name="patronymic2" value="" placeholder="Middle name" required="">
                                </div>
                            </div>

                            <br>


                             <div class="form-group">
                                <label class="col-sm-2 control-label" for="region2">Region</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="region2" value="" name="region2" required=""><option value="Autonomous Republic of Crimea">Autonomous Republic of Crimea</option><option value="Vinnytsia oblast">Vinnytsia oblast</option><option value="Volyn oblast">Volyn oblast</option><option value="Dnipropetrovsk oblast">Dnipropetrovsk oblast</option><option value="Donetsk oblast">Donetsk oblast</option><option value="Zhytomyr oblast">Zhytomyr oblast</option><option value="Закарпатская область">Закарпатская область</option><option value="Zakarpattia oblast">Zakarpattia oblast</option><option value="Ivano-Frankivsk oblast">Ivano-Frankivsk oblast</option><option value="Kyiv oblast">Kyiv oblast</option><option value="Kirovohrad oblast">Kirovohrad oblast</option><option value="Luhansk oblast">Luhansk oblast</option><option value="Lviv oblast">Lviv oblast</option><option value="Mykolaiv oblast">Mykolaiv oblast</option><option value="Odesa oblast">Odesa oblast</option><option value="Poltava oblast">Poltava oblast</option><option value="Rivne oblast">Rivne oblast</option><option value="Sumy oblast">Sumy oblast</option><option value="Ternopil oblast">Ternopil oblast</option><option value="Kharkiv oblast">Kharkiv oblast</option><option value="Kherson oblast">Kherson oblast</option><option value="Khmelnytskyi oblast">Khmelnytskyi oblast</option><option value="Cherkasy oblast">Cherkasy oblast</option><option value="Chernihiv oblast">Chernihiv oblast</option><option value="Chernivtsi oblast">Chernivtsi oblast</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="town2">Town</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="town2" value="" name="town2" required=""><option value="Agrarne">Agrarne</option><option value="Azovskoe">Azovskoe</option><option value="Alupka">Alupka</option><option value="Alushta">Alushta</option><option value="Armyansk">Armyansk</option><option value="Aeroflotskiy">Aeroflotskiy</option><option value="Bagerovo">Bagerovo</option><option value="Bahchisaray">Bahchisaray</option><option value="Beloglinka">Beloglinka</option><option value="Belogorsk">Belogorsk</option><option value="Blignee">Blignee</option><option value="Bondarenkovo">Bondarenkovo</option><option value="Verhnesadovoe">Verhnesadovoe</option><option value="Вилино">Vilino</option><option value="Vinogradnoe">Vinogradnoe</option><option value="Vitino">Vitino</option><option value="Voikovo">Voikovo</option><option value="Voshod">Voshod</option><option value="Gaspra">Gaspra</option><option value="Gvardeiskoe">Gvardeiskoe</option><option value="Geroiskoe">Geroiskoe</option><option value="Goluboy zaliv">Goluboy zaliv</option><option value="Gresovskiy">Gresovskiy</option><option value="Gurzuf">Gurzuf</option><option value="Dalekoe">Dalekoe</option><option value="Dghankoi">Dghankoi</option><option value="Dneprovka">Dneprovka</option><option value="Dobroe">Dobroe</option><option value="Donskoe<">Donskoe</option><option value="Evpatoriya">Evpatoriya</option><option value="Gelyabovka">Gelyabovka</option><option value="Guravki">Guravki</option><option value="Zaozernoe">Zaozernoe</option><option value="Zuya">Zuya</option><option value="Inkerman">Inkerman</option><option value="Kalinovka">Kalinovka</option><option value="Kamenolomnya">Kamenolomnya</option><option value="Kariernoe">Kariernoe</option><option value="Kaciveli">Kaciveli</option><option value="Kacha">Kacha</option><option value="Kerch">Kerch</option><option value="Kirovskoe">Kirovskoe</option><option value="Koktebel">Koktebel</option><option value="Kolchugino">Kolchugino</option><option value="Komsomolskoe">Komsomolskoe</option><option value="Komsomolskoe">c</option><option value="Krasnogvardeiskoe">Krasnogvardeiskoe</option><option value="Krasnokamenka">Krasnokamenka</option><option value="Krasnoperekopsk">Krasnoperekopsk</option><option value="Krimskoe">Krimskoe</option><option value="Kuybishevo">Kuybishevo</option><option value="Karpati">Karpati</option><option value="Lenino">Lenino</option><option value="Livadiya">Livadiya</option><option value="Mazanka">Mazanka</option><option value="Malorechenskoe">Malorechenskoe</option><option value="Maliy mayak">Maliy mayak</option><option value="Marfovka">Marfovka</option><option value="Massandra">Massandra</option><option value="Megvodnoe">Megvodnoe</option><option value="Mirnoe">Mirnoe</option><option value="Molodegnoe">Molodegnoe</option><option value="Mramornoe">Mramornoe</option><option value="Nignegorskiy">Nignegorskiy</option><option value="Nikita">Nikita</option><option value="Nikolayevka">Nikolayevka</option><option value="Novoozernoe">Novoozernoe</option><option value="Novoselovskoe">Новоселовское</option><option value="Novoselskoe">Novoselskoe</option><option value="Noviy svet">Noviy svet</option><option value="Oktyabirskoe">Oktyabirskoe</option><option value="Oliva">Oliva</option><option value="Ordgonikidze">Ordgonikidze</option><option value="Oreanda">Oreanda</option><option value="Orehovo">Orehovo</option><option value="Ostanino">Ostanino</option><option value="Otradnoe">Otradnoe</option><option value="Parkovoe">Parkovoe</option><option value="Partenit">Partenit</option><option value="Pervomayskoe">Pervomayskoe</option><option value="Perevalnoe">Perevalnoe</option><option value="Perovo">Perovo</option><option value="Peschanoe">Peschanoe</option><option value="Petrovka">Petrovka</option><option value="Pionerskoe">Pionerskoe</option><option value="Pozgarskoe">Pozgarskoe</option><option value="Poltavka">Poltavka</option><option value="Ponizovka">Ponizovka</option><option value="Pochtovoe">Pochtovoe</option><option value="Pribrezgnoe">Pribrezgnoe</option><option value="Privetnoe">Privetnoe</option><option value="Primorskiy">Primorskiy</option><option value="Priozernoe">Priozernoe</option><option value="Razdolnoe">Razdolnoe</option><option value="Rodnikovoe">Rodnikovoe</option><option value="Sadovoe">Sadovoe</option><option value="Saki">Saki</option><option value="Sanatornoe">Sanatornoe</option><option value="Sevastopol">Sevastopol</option><option value="Senokosnoe">Senokosnoe</option><option value="Simeiz">Simeiz</option><option value="Simferopol">Simferopol</option><option value="Skalistoe">Skalistoe</option><option value="Skvorcovo">Skvorcovo</option><option value="Sovetskiy">Sovetskiy</option><option value="Sovetskoe">Sovetskoe</option><option value="Solyanoe">Solyanoe</option><option value="Stariy Krim">Stariy Krim</option><option value="Sudak">Sudak</option><option value="Tambovka">Tambovka</option><option value="Tiplovoe">Tiplovoe</option><option value="Topolnoe">Topolnoe</option><option value="Ukromnoe">Ukromnoe</option><option value="Feodosiya">Feodosiya</option><option value="Fontani">Fontani</option><option value="Foros">Foros</option><option value="Chaikino">Chaikino</option><option value="Chernomorskoe">Chernomorskoe</option><option value="Chistenkoe">Chistenkoe</option><option value="Chistopolie">Chistopolie</option><option value="Chkalovo">Chkalovo</option><option value="Shebetovka">Shebetovka</option><option value="Shelkino">Shelkino</option><option value="Yalta">Yalta</option><option value="Yantarnoe">Yantarnoe</option><option value="Yasnoe">Yasnoe</option></select>
                                </div>
                            </div>

                            <br>
                                 <div class="form-group">
                                <label class="col-sm-2 control-label" for="cat">Category</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="cat" name="cat" required="" value="">
                                        <option value="Юний суддя">Judge junior</option><option value="Суддя">Judge</option><option value="3 категорія">3 category</option><option value="2 категорія">2 category</option><option value="1 категорія">1 category</option><option value="Національна">National</option><option value="Міжнародна">International</option>                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="sex2">Sex</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="sex2" name="sex2" required="" value="">
                                        <option value="Чоловіча">Male</option>
                                        <option value="Жіноча">Feamale</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                           <div class="form-group">
                                <label class="col-sm-2 control-label" for="avatar2">Avatar (Required, prefer square form)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="avatar2" name="2" >
                                </div>
                            </div>				
							

                           <div class="form-group">
                                <div class="col-sm-11"><center>
                                    <button id="regComplete" type="submit" class="btn btn-success btn-lg" >Register!</button>
                                </div></center>
                            </div>

                        </form>						
						
						
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <h3 class="gray text-center ua">Реєстрація продавця</h3>
						<h3 class="gray text-center en">Seller registration</h3>
						
                        <form class="form-horizontal regforms ua" method="post" enctype="multipart/form-data" action="{{action('RegisterController@store3')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="role" value="Продавець">
						<input type="hidden" name="country3" value="Ukraine">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email3">Email</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="email" autocomplete="off" id="email3" name="email3" placeholder="E-mail" value="" autofocus="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="passw3">Пароль</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="password" autocomplete="off" id="passw3" name="passw3" value="" placeholder="Пароль" required="">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name3">Ім'я</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="name3" name="name3" value="" placeholder="Ім&#39;я" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="surname3">Прізвище</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="surname3" name="surname3" value="" placeholder="Прізвище" required="">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label" for="provider3">Постачальник</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="provider3" name="provider3" value="" placeholder="Постачальник" required="">
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="region3">Область</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="region3" name="region3" required=""><option value="АР Крым">АР Крым</option><option value="Винницкая область">Винницкая область</option><option value="Волынская область">Волынская область</option><option value="Днепропетровская область">Днепропетровская область</option><option value="Донецкая область">Донецкая область</option><option value="Житомирская область">Житомирская область</option><option value="Закарпатская область">Закарпатская область</option><option value="Запорожская область">Запорожская область</option><option value="Ивано-Франковская область">Ивано-Франковская область</option><option value="Київ">Київ</option><option value="Київська область">Київська область</option><option value="Кировоградская область">Кировоградская область</option><option value="Луганская область">Луганская область</option><option value="Львовская область">Львовская область</option><option value="Николаевская область">Николаевская область</option><option value="Одесская область">Одесская область</option><option value="Полтавская область">Полтавская область</option><option value="Ровенская область">Ровенская область</option><option value="Сумская область">Сумская область</option><option value="Тернопольская область">Тернопольская область</option><option value="Харьковская область">Харьковская область</option><option value="Херсонская область">Херсонская область</option><option value="Хмельницкая область">Хмельницкая область</option><option value="Черкасская область">Черкасская область</option><option value="Черниговская область">Черниговская область</option><option value="Черновицкая область">Черновицкая область</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="town3">Місто</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="town3" name="town3" required=""><option value="Аграрное">Аграрное</option><option value="Азовское">Азовское</option><option value="Алупка">Алупка</option><option value="Алушта">Алушта</option><option value="Армянск">Армянск</option><option value="Аэрофлотский">Аэрофлотский</option><option value="Багерово">Багерово</option><option value="Бахчисарай">Бахчисарай</option><option value="Белоглинка">Белоглинка</option><option value="Белогорск">Белогорск</option><option value="Ближнее">Ближнее</option><option value="Бондаренково">Бондаренково</option><option value="Верхнесадовое">Верхнесадовое</option><option value="Вилино">Вилино</option><option value="Виноградное">Виноградное</option><option value="Витино">Витино</option><option value="Войково">Войково</option><option value="Восход">Восход</option><option value="Гаспра">Гаспра</option><option value="Гвардейское">Гвардейское</option><option value="Геройское">Геройское</option><option value="Голубой Залив">Голубой Залив</option><option value="Грэсовский<">Грэсовский</option><option value="Гурзуф">Гурзуф</option><option value="Далекое">Далекое</option><option value="Джанкой">Джанкой</option><option value="Днепровка">Днепровка</option><option value="Доброе">Доброе</option><option value="Донское<">Донское</option><option value="Евпатория">Евпатория</option><option value="Желябовка">Желябовка</option><option value="Журавки">Журавки</option><option value="Заозерное">Заозерное</option><option value="Зуя">Зуя</option><option value="Инкерман">Инкерман</option><option value="Калиновка">Калиновка</option><option value="Каменоломня">Каменоломня</option><option value="Карьерное">Карьерное</option><option value="Кацивели">Кацивели</option><option value="Кача">Кача</option><option value="Керчь">Керчь</option><option value="Кировское">Кировское</option><option value="Коктебель">Коктебель</option><option value="Кольчугино">Кольчугино</option><option value="Комсомольское">Комсомольское</option><option value="Комсомольское">c</option><option value="Красногвардейское">Красногвардейское</option><option value="Краснокаменка">Краснокаменка</option><option value="Красноперекопск">Красноперекопск</option><option value="Крымское">Крымское</option><option value="Куйбышево">Куйбышево</option><option value="Карпаты">Карпаты</option><option value="Ленино">Ленино</option><option value="Ливадия">Ливадия</option><option value="Мазанка">Мазанка</option><option value="Малореченское">Малореченское</option><option value="Малый маяк">Малый маяк</option><option value="Марфовка">Марфовка</option><option value="Массандра">Массандра</option><option value="Межводное">Межводное</option><option value="Мирное">Мирное</option><option value="Молодежное">Молодежное</option><option value="Мраморное">Мраморное</option><option value="Нижнегорский">Нижнегорский</option><option value="Никита">Никита</option><option value="Николаевка">Николаевка</option><option value="Новоозерное">Новоозерное</option><option value="Новоселовское">Новоселовское</option><option value="Новосельское">Новосельское</option><option value="Новый Свет">Новый Свет</option><option value="Октябрьское">Октябрьское</option><option value="Олива">Олива</option><option value="Орджоникидзе">Орджоникидзе</option><option value="Ореанда">Ореанда</option><option value="Орехово">Орехово</option><option value="Останино">Останино</option><option value="Отрадное">Отрадное</option><option value="Парковое">Парковое</option><option value="Партенит">Партенит</option><option value="Первомайское">Первомайское</option><option value="Перевальное">Перевальное</option><option value="Перово">Перово</option><option value="Песчаное">Песчаное</option><option value="Петровка">Петровка</option><option value="Пионерское">Пионерское</option><option value="Пожарское">Пожарское</option><option value="Полтавка">Полтавка</option><option value="Понизовка">Понизовка</option><option value="Почтовое">Почтовое</option><option value="Прибрежное">Прибрежное</option><option value="Приветное">Приветное</option><option value="Приморский">Приморский</option><option value="Приозерное">Приозерное</option><option value="Раздольное">Раздольное</option><option value="Родниковое">Родниковое</option><option value="Садовое">Садовое</option><option value="Саки">Саки</option><option value="Санаторное">Санаторное</option><option value="Севастополь">Севастополь</option><option value="Сенокосное">Сенокосное</option><option value="Симеиз">Симеиз</option><option value="Симферополь">Симферополь</option><option value="Скалистое">Скалистое</option><option value="Скворцово">Скворцово</option><option value="Советский">Советский</option><option value="Советское">Советское</option><option value="Соляное">Соляное</option><option value="Старый Крым">Старый Крым</option><option value="Судак">Судак</option><option value="Тамбовка">Тамбовка</option><option value="Тиловое">Тиловое</option><option value="Топольное">Топольное</option><option value="Укромное">Укромное</option><option value="Феодосия">Феодосия</option><option value="Фонтаны">Фонтаны</option><option value="Форос">Форос</option><option value="Чайкино">Чайкино</option><option value="Черноморское">Черноморское</option><option value="Чистенькое">Чистенькое</option><option value="Чистополье">Чистополье</option><option value="Чкалово">Чкалово</option><option value="Щебетовка">Щебетовка</option><option value="Щелкино">Щелкино</option><option value="Ялта">Ялта</option><option value="Янтарное">Янтарное</option><option value="Ясное">Ясное</option></select>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="avatar">Аватар (желательно квадратный) <small class="danger">обов'язково</small></label>
                                <div class="col-sm-9">
                                    <input required="" class="form-control" type="file" id="avatar3" name="avatar3">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-11"><center>
                                    <button id="regComplete3" type="submit" class="btn btn-success btn-lg">Зареєструватися!</button>
                                </div></center>
                            </div>

                        </form>
              <!----------------------------------------------------------------------------English----------------------------------------------------------------------->

						<form class="form-horizontal regforms en" method="post" enctype="multipart/form-data" action="{{action('RegisterController@store3')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="role" value="Продавець">
						<input type="hidden" name="country3" value="Ukraine">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="email3">Email</label>
                                <div class="col-sm-9 ">
                                    <input class="form-control" type="email" autocomplete="off" id="email3" name="email3" placeholder="E-mail" value="" autofocus="" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="passw3">Password</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="password" autocomplete="off" id="passw3" name="passw3" value="" placeholder="password" required="">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="name3">Name</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="name3" name="name3" value="" placeholder="Name" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="surname3">Surname</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="surname3" name="surname3" value="" placeholder="Surname" required="">
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-2 control-label" for="provider3">Provider</label>
                                <div class="col-sm-9  ">
                                    <input class="form-control" type="text" id="provider3" name="provider3" value="" placeholder="Provider" required="">
                                </div>
                            </div>
                            <br>

                             <div class="form-group">
                                <label class="col-sm-2 control-label" for="region3">Region</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="region3" value="" name="region3" required=""><option value="Autonomous Republic of Crimea">Autonomous Republic of Crimea</option><option value="Vinnytsia oblast">Vinnytsia oblast</option><option value="Volyn oblast">Volyn oblast</option><option value="Dnipropetrovsk oblast">Dnipropetrovsk oblast</option><option value="Donetsk oblast">Donetsk oblast</option><option value="Zhytomyr oblast">Zhytomyr oblast</option><option value="Закарпатская область">Закарпатская область</option><option value="Zakarpattia oblast">Zakarpattia oblast</option><option value="Ivano-Frankivsk oblast">Ivano-Frankivsk oblast</option><option value="Kyiv oblast">Kyiv oblast</option><option value="Kirovohrad oblast">Kirovohrad oblast</option><option value="Luhansk oblast">Luhansk oblast</option><option value="Lviv oblast">Lviv oblast</option><option value="Mykolaiv oblast">Mykolaiv oblast</option><option value="Odesa oblast">Odesa oblast</option><option value="Poltava oblast">Poltava oblast</option><option value="Rivne oblast">Rivne oblast</option><option value="Sumy oblast">Sumy oblast</option><option value="Ternopil oblast">Ternopil oblast</option><option value="Kharkiv oblast">Kharkiv oblast</option><option value="Kherson oblast">Kherson oblast</option><option value="Khmelnytskyi oblast">Khmelnytskyi oblast</option><option value="Cherkasy oblast">Cherkasy oblast</option><option value="Chernihiv oblast">Chernihiv oblast</option><option value="Chernivtsi oblast">Chernivtsi oblast</option></select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="town3">Town</label>
                                <div class="col-sm-9 ">
                                    <select class="form-control" id="town3" value="" name="town3" required=""><option value="Agrarne">Agrarne</option><option value="Azovskoe">Azovskoe</option><option value="Alupka">Alupka</option><option value="Alushta">Alushta</option><option value="Armyansk">Armyansk</option><option value="Aeroflotskiy">Aeroflotskiy</option><option value="Bagerovo">Bagerovo</option><option value="Bahchisaray">Bahchisaray</option><option value="Beloglinka">Beloglinka</option><option value="Belogorsk">Belogorsk</option><option value="Blignee">Blignee</option><option value="Bondarenkovo">Bondarenkovo</option><option value="Verhnesadovoe">Verhnesadovoe</option><option value="Вилино">Vilino</option><option value="Vinogradnoe">Vinogradnoe</option><option value="Vitino">Vitino</option><option value="Voikovo">Voikovo</option><option value="Voshod">Voshod</option><option value="Gaspra">Gaspra</option><option value="Gvardeiskoe">Gvardeiskoe</option><option value="Geroiskoe">Geroiskoe</option><option value="Goluboy zaliv">Goluboy zaliv</option><option value="Gresovskiy">Gresovskiy</option><option value="Gurzuf">Gurzuf</option><option value="Dalekoe">Dalekoe</option><option value="Dghankoi">Dghankoi</option><option value="Dneprovka">Dneprovka</option><option value="Dobroe">Dobroe</option><option value="Donskoe<">Donskoe</option><option value="Evpatoriya">Evpatoriya</option><option value="Gelyabovka">Gelyabovka</option><option value="Guravki">Guravki</option><option value="Zaozernoe">Zaozernoe</option><option value="Zuya">Zuya</option><option value="Inkerman">Inkerman</option><option value="Kalinovka">Kalinovka</option><option value="Kamenolomnya">Kamenolomnya</option><option value="Kariernoe">Kariernoe</option><option value="Kaciveli">Kaciveli</option><option value="Kacha">Kacha</option><option value="Kerch">Kerch</option><option value="Kirovskoe">Kirovskoe</option><option value="Koktebel">Koktebel</option><option value="Kolchugino">Kolchugino</option><option value="Komsomolskoe">Komsomolskoe</option><option value="Komsomolskoe">c</option><option value="Krasnogvardeiskoe">Krasnogvardeiskoe</option><option value="Krasnokamenka">Krasnokamenka</option><option value="Krasnoperekopsk">Krasnoperekopsk</option><option value="Krimskoe">Krimskoe</option><option value="Kuybishevo">Kuybishevo</option><option value="Karpati">Karpati</option><option value="Lenino">Lenino</option><option value="Livadiya">Livadiya</option><option value="Mazanka">Mazanka</option><option value="Malorechenskoe">Malorechenskoe</option><option value="Maliy mayak">Maliy mayak</option><option value="Marfovka">Marfovka</option><option value="Massandra">Massandra</option><option value="Megvodnoe">Megvodnoe</option><option value="Mirnoe">Mirnoe</option><option value="Molodegnoe">Molodegnoe</option><option value="Mramornoe">Mramornoe</option><option value="Nignegorskiy">Nignegorskiy</option><option value="Nikita">Nikita</option><option value="Nikolayevka">Nikolayevka</option><option value="Novoozernoe">Novoozernoe</option><option value="Novoselovskoe">Новоселовское</option><option value="Novoselskoe">Novoselskoe</option><option value="Noviy svet">Noviy svet</option><option value="Oktyabirskoe">Oktyabirskoe</option><option value="Oliva">Oliva</option><option value="Ordgonikidze">Ordgonikidze</option><option value="Oreanda">Oreanda</option><option value="Orehovo">Orehovo</option><option value="Ostanino">Ostanino</option><option value="Otradnoe">Otradnoe</option><option value="Parkovoe">Parkovoe</option><option value="Partenit">Partenit</option><option value="Pervomayskoe">Pervomayskoe</option><option value="Perevalnoe">Perevalnoe</option><option value="Perovo">Perovo</option><option value="Peschanoe">Peschanoe</option><option value="Petrovka">Petrovka</option><option value="Pionerskoe">Pionerskoe</option><option value="Pozgarskoe">Pozgarskoe</option><option value="Poltavka">Poltavka</option><option value="Ponizovka">Ponizovka</option><option value="Pochtovoe">Pochtovoe</option><option value="Pribrezgnoe">Pribrezgnoe</option><option value="Privetnoe">Privetnoe</option><option value="Primorskiy">Primorskiy</option><option value="Priozernoe">Priozernoe</option><option value="Razdolnoe">Razdolnoe</option><option value="Rodnikovoe">Rodnikovoe</option><option value="Sadovoe">Sadovoe</option><option value="Saki">Saki</option><option value="Sanatornoe">Sanatornoe</option><option value="Sevastopol">Sevastopol</option><option value="Senokosnoe">Senokosnoe</option><option value="Simeiz">Simeiz</option><option value="Simferopol">Simferopol</option><option value="Skalistoe">Skalistoe</option><option value="Skvorcovo">Skvorcovo</option><option value="Sovetskiy">Sovetskiy</option><option value="Sovetskoe">Sovetskoe</option><option value="Solyanoe">Solyanoe</option><option value="Stariy Krim">Stariy Krim</option><option value="Sudak">Sudak</option><option value="Tambovka">Tambovka</option><option value="Tiplovoe">Tiplovoe</option><option value="Topolnoe">Topolnoe</option><option value="Ukromnoe">Ukromnoe</option><option value="Feodosiya">Feodosiya</option><option value="Fontani">Fontani</option><option value="Foros">Foros</option><option value="Chaikino">Chaikino</option><option value="Chernomorskoe">Chernomorskoe</option><option value="Chistenkoe">Chistenkoe</option><option value="Chistopolie">Chistopolie</option><option value="Chkalovo">Chkalovo</option><option value="Shebetovka">Shebetovka</option><option value="Shelkino">Shelkino</option><option value="Yalta">Yalta</option><option value="Yantarnoe">Yantarnoe</option><option value="Yasnoe">Yasnoe</option></select>
                                </div>
                            </div>
							
                            <br>
                            <br>
                               <div class="form-group">
                                <label class="col-sm-2 control-label" for="avatar3">Avatar (Required, prefer square form)</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="file" id="avatar3" name="avatar3" >
                                </div>
                            </div>				
							

                           <div class="form-group">
                                <div class="col-sm-11"><center>
                                    <button id="regComplete" type="submit" class="btn btn-success btn-lg" >Register!</button>
                                </div></center>
                            </div>

                        </form>
			  
				   </div>
                </div>
                    </div>

        <div class="col-md-4 ua">
            <br>
            <h4 class="gray mg-top-10">Забули пароль? Вам сюди </h4>
            <a href="{{ url('/password/reset') }}" class="btn btn-info btn-lg full-width tournament-button">Відновити пароль</a>
            <hr>
            <p>Також якщо ви зареєструвалися на не справжній email ви можете написати адміністрації.</p>
        </div>
		
		        <div class="col-md-4 en">
            <br>
            <h4 class="gray mg-top-10">Forgot password? Click here</h4>
            <a href="{{ url('/password/reset') }}" class="btn btn-info btn-lg full-width tournament-button">Restore password</a>
            <hr>
            <p>If you registred in a wrong email contact with administration.</p>
        </div>
    </div>
</div>
@if(Session::has('message'))
{{Session::get('message')}}
@endif
@if (count($errors) > 0)
 <ul class="list-group" style="width:300px; margin-left:auto; margin-right:auto;">
@foreach ($errors->all() as $error)
<li class="list-group-item list-group-item-danger">{{ $error }}</li>
@endforeach
</ul>
@endif
@endsection