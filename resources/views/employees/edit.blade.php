@extends('layout.app')

@section('content')
<title>Edit Employee</title>
<div class="content">
	<h2>Edit Employee {{ $employee->name }}</h2>
</div>
{{ Form::model($employee, ['route' => array('employees.update', $employee->id), 'method' => 'PUT']) }}
<div class="row">
	<div class="col l12">
		{{ Form::Label('name','Name Employee') }}
		{{ Form::text('name', $value = $employee->name) }}
		{{ $errors->first('name') }}
	</div>
</div>
<div class="row">
	<div class="col l1">
		{{ Form::Label('age','Age') }}
		{{ Form::number('age', $employee->age) }}
		{{ $errors->first('number') }}
	</div>
</div>
<div class="row">
	<div class="col l6">
		{{ Form::Label('email','Email Employee') }}
		{{ Form::email('email', $value = $employee->email, $attributes = array('required')) }}
		{{ $errors->first('email') }}
	</div>
</div>
<div class="row">
	<div class="col l12">
		{{ Form::Label('address','Adress Employee') }}
		{{ Form::text('address', $value = $employee->address) }}
		{{ $errors->first('address') }}
	</div>
</div>
<div class="col l12">
	{{ Form::submit('Save', array('class' => 'btn waves-effect waves-light')) }}
</div>
{{ Form::close() }}
@stop