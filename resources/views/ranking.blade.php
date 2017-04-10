@extends('layouts.app')

@section('content')
<div class="ua">
<div class="container">
    <h2 class="gray text-center">Рейтинг</h2>
    <br>
    <div class="row">
        <div class="col-md-8 text-center"  style="float:none !important; margin-left:auto !important; margin-right: auto !important;">
 <table class="table" style="text-align:center;">
<thead> <tr>
<th style="text-align:center;">№</th>
<th style="text-align:center;">Ім'я Побатькові</th>
<th style="text-align:center;">Рейтинг</th>
</tr></thead>
<tbody>
@php
$i = 1;
foreach ($sportsmans as $sportsman)
{
echo("<tr>
<td><b>$i</b></td>
<td><a href='/sportsman/$sportsman->id'>$sportsman->surname $sportsman->name</a></td>
<td>$sportsman->raiting</td>
</tr>");
$i++;
}
@endphp
</tbody></table>
<?php echo $sportsmans->render(); ?>
        </div>
    </div>
</div>

</div>

<div class="en">
<div class="container">
    <h2 class="gray text-center">Raiting</h2>
    <br>
    <div class="row">
        <div class="col-md-8 text-center" style="float:none !important; margin-left:auto !important; margin-right: auto !important;">
 <table class="table" style="text-align:center;">
<thead> <tr>
<th style="text-align:center;">№</th>
<th style="text-align:center;">Name Surname</th>
<th style="text-align:center;">Raiting</th>
</tr></thead>
<tbody>
@php
$i = 1;
foreach ($sportsmans as $sportsman)
{
echo("<tr>
<td><b>$i</b></td>
<td><a href='/sportsman/$sportsman->id'>$sportsman->surname $sportsman->name</a></td>
<td>$sportsman->raiting</td>
</tr>");
$i++;
}
@endphp
</tbody></table>
<?php echo $sportsmans->render(); ?>
        </div>
    </div>
</div>


</div>
@endsection