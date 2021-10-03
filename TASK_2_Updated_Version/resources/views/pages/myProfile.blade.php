<?php 
/*
<h2>  <?php //echo $name?> </h2>
<h2>  <?php //echo $id?> </h2>
<h2>  <?php// echo $dob?> </h2>
<table>

foreach($names as $n){
echo"<tr>";

echo"<td>".$n."</td>";
echo"</tr>";
}
*/
?>
<?php /*
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body> 

<a class="btn btn-primary" href="/contact">Contact </a> |
<a class="btn btn-success"href="/profile"> My Profile</a>

<h1>My profile</h1>
</table>

<h2>{{$name}}</h2>
<h2>{{$id}}</h2>
<h2>{{$dob}}</h2>

<table>
    @foreach($names as $n)
    <tr><td>{{$n}}</td></tr>
    @endforeach
</table>
</body>

</html>
*/
?>
@extends('layouts.app')
@section('dynamic_content')

<h1>My profile</h1>


<h2>{{$name}}</h2>
<h2>{{$id}}</h2>
<h2>{{$dob}}</h2>

<table>
    @foreach($names as $n)
    <tr><td>{{$n}}</td></tr>
    @endforeach
</table>
@endsection