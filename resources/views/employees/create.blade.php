@extends('layout.app')

@section('content')
<title>Add Employee</title>
<div class="content">
	<h2>Add Employee</h2>
</div>
{{ Form::open(array('url' => 'employees')) }}
<div class="row">
	<div class="col l12">
		{{ Form::Label('name','Name Employee') }}
		{{ Form::text('name') }}
		{{ $errors->first('name') }}
	</div>
</div>
<div class="row">
	<div class="col l1">
		{{ Form::Label('age','Age') }}
		{{ Form::number('age','18') }}
		{{ $errors->first('number') }}
	</div>
</div>
<div class="row">
	<div class="col l6">
		{{ Form::Label('email','Email Employee') }}
		{{ Form::email('email', $value = null, $attributes = array('required')) }}
		{{ $errors->first('email') }}
	</div>
</div>
<div class="row">
	<div class="col l12">
		{{ Form::Label('address','Adress Employee') }}
		{{ Form::text('address') }}
		{{ $errors->first('address') }}
	</div>
</div>
<div class="col l12">
	{{ Form::submit('Save', array('class' => 'btn waves-effect waves-light')) }}
</div>
{{ Form::close() }}
@stop