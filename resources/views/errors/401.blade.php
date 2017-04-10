@extends('layouts.app')

@section('content')
<title>Ошибка</title>
<div class="ua">
<br>
<div id="content" class="container">
    <div class="row">

        <div class="col-sm-8" style="margin-left:20%">
<div class="alert alert-danger" role="alert" style="text-align:center;">Помилка авторизації. Увійдіть або <a href="/registration"> зареєструйтесь </a></div>
    </div>
</div>
</div>
</div>
<div class="en">
<br>
<div id="content" class="container">
    <div class="row">

        <div class="col-sm-8" style="margin-left:20%">
<div class="alert alert-danger" role="alert" style="text-align:center;">Authorization error. Login or <a href="/registration"> register</a></div>
    </div>
</div>
</div>
</div>
@endsection