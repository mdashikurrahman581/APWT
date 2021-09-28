@extends('layouts.app')
@section('dynamic_content')

<table class="table table-borded">

  <tr>
      <th>Name</th>
      <th>Id</th>
      <th>Dob</th>
      <th></th>
  </tr>
@foreach($students as $student)

<tr>

      <td>{{$student->name}}</td>
      <td>{{$student->id}}</td>
      <td>{{$student->dob}}</td>
      <td><a href="/student/edit/{{$student->id}}">Edit</a></td>
</tr>

@endforeach
</table>

@endsection
