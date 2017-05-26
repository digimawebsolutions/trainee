@extends('trainee.renzlayout')

@section('content')

<div class="clearfix">
	<h3 class="pull-left">Users List</h3>
	<div class="pull-right"><button onclick="location.href='/renz_crud/add'" class="btn btn-primary">Add New User</button></div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Age</th>
			<th>Date Created</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($_user as $user)
		<tr>
			<td>{{ $user->first_name }}</td>
			<td>{{ $user->last_name }}</td>
			<td>{{ $user->age }}</td>
			<td>{{ date("F, d Y", strtotime($user->created_date)) }}</td>
			<td class="text-center">
				<a href="/renz_crud/edit?id={{ $user->id }}">EDIT</a> |
				<a onclick="return confirm('Are you sure you want to delete?')" href="/renz_crud/delete?id={{ $user->id }}">DELETE</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection