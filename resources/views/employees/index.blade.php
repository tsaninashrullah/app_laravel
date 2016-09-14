@extends('layout.app')

@section('content')
<title>List Employee</title>
<div class="content">
	<h2>List Employee</h2>
</div>
<div class="col l12">
	<div class="table-responsive">
	<table class="highlight">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Address</th>
			<th colspan="3">Action</th>
		</tr>
		@foreach ($employees as $employee)
			<tr>
				<td>{{ $employee->name }}</td>
				<td>{{ $employee->age }}</td>
				<td>{{ $employee->email }}</td>
				<td>{{ $employee->address }}</td>
				<td>
					{{ link_to('employees/'.$employee->id, 'Show', array('class' => 'waves-effect')) }}
				</td>
				<td>
					{{ link_to('employees/'.$employee->id.'/edit', 'Edit', array('class' => 'waves-effect')) }} 
				</td>
				<td>
					{{ Form::open(array('route' => array('employees.destroy', $employee->id), 'method' => 'delete')) }}
					{{ Form::submit('Delete',array('class' => 'waves-effect', "onclick" => "return confirm('Are you sure?')")) }}
					{{  Form::close() }}
				</td>
			</tr>
		@endforeach

	</table>
	<br>
	<br>
	<br>
	</div>
<a class="waves-effect waves-light btn" href="employees/create">Create</a>
</div>
@stop