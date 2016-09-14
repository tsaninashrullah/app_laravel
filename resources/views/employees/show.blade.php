@extends("layout.app")
@section("content")
<title>{{ $employee->name }}</title>
  <div>
    <h1>{{ $employee->name }}</h1>
    <p>Age : {{ $employee->age}}</p>
    <p>Email : {{ $employee->email}}</p>
    <i>Address : {{ $employee->address }}</i>
  </div>
  {{ link_to('employees/', 'Back', array('class' => 'waves-effect')) }}
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

@stop