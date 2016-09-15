@extends('layout.app')

@section('content')
<title>List Employee</title>
<div class="content">
	<h2>List Employee</h2>
</div>
<div class="col l12">
	<div class="table-responsive">
	<!-- <a class="waves-effect waves-light btn" href="employees/create">Create</a> -->
	@if(count($employees) == 0)
		<br>
		<br>
		<h4 align="center">Sorry, data not yet available, You can {{ link_to('employees/create', 'Create', array('class' => 'waves-effect')) }} the data</h4>
	@else
	{{ link_to('employees/create', 'Create', array('class' => 'waves-effect btn')) }} 
	<br>
	<br>
	<table class="highlight responsive-table bordered">
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
				<td width="10%">
					{{ link_to('employees/'.$employee->id, 'Show', array('class' => 'btn waves-effect')) }}
				</td>
				<td width="10%">
					{{ link_to('employees/'.$employee->id.'/edit', 'Edit', array('class' => 'btn waves-effect')) }} 
				</td>
				<td width="10%">
					{{ Form::open(array('route' => array('employees.destroy', $employee->id), 'method' => 'delete')) }}
					{{ Form::submit('Delete',array('class' => 'waves-effect btn', "onclick" => "return confirm('Are you sure?')")) }}
					{{  Form::close() }}
				</td>
			</tr>
		@endforeach
	</table>
	@endif
	<div class="row">
		<div class="col l12">
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>
	</div>
	<br>
	<br>
	<br>
	</div>
</div>
@stop