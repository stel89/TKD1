@extends('layouts.app')

@section('content')
<title>Ошибка</title>
<div class="ua">
<br>
<div id="content" class="container">
    <div class="row">

        <div class="col-sm-8" style="margin-left:20%">
<div class="alert alert-danger" role="alert" style="text-align:center;">Помилка: Невірний код доступу або недостатньо прав, повернітся на <a href="/">Головну</a> та спробуйте ще раз.</div>
    </div>
</div>
</div>
</div>
<div class="en">
<br>
<div id="content" class="container">
    <div class="row">

        <div class="col-sm-8" style="margin-left:20%">
<div class="alert alert-danger" role="alert" style="text-align:center;">Error: Invalid code or access denied, return to <a href="/">Main</a> and try again.</div>
    </div>
</div>
</div>
</div>
@endsection