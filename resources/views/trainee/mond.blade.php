@extends('trainee.layout')
@section('content')

<div class="clearfix">
	<h3 class="pull-left">Admin List</h3>
	<div class="pull-right"><button onclick="location.href='/monde/add'" class="btn btn-primary">Register</button></div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Gender</th>
			<th>Birthday</th>
			<th>Email</th>
			<th>Contact#</th>
			<th>Date Created</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($_customer as $customer)
		<tr>
			<td>{{ $customer->first_name }}</td>
			<td>{{ $customer->last_name }}</td>
			<td>{{ $customer->gender }}</td>
			<td>{{ $customer->bday }}</td>
			<td>{{ $customer->email == "" ? "N/A" : $customer->email }}</td>
			<td>{{ $customer->contact_number == "" ? "N/A" : $customer->contact_number }}</td>
			<td>{{ date("F, d Y", strtotime($customer->created_date)) }}</td>
			<td class="text-center">
				<a href="/monde/edit?id={{ $customer->user_id }}">EDIT</a> |
				<a onclick="return confirm('Are you sure you want to delete?')" href="/monde/delete?id={{ $customer->user_id }}">DELETE</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection