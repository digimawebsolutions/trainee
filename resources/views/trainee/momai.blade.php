@extends('trainee.layout')
@section('content')

<div class="clearfix">
	<h3 class="pull-left"><i class="fa fa-id-card"> User List</i></h3>
	<div class="pull-right">
	<button onclick="location.href='/momai/login'" class="btn btn-primary" style="margin-right: 100px;">Log in</button>
	<button onclick="location.href='/momai/add'" class="btn btn-primary">Add User</button>
	</div>

</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date Created</th>
			<th>E-mail</th>
			<th>Contact #</th>
			<th>Birthday</th>
			<th>Gender</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($_customer as $customer)
		<tr>
			<td>{{ $customer->first_name }}</td>
			<td>{{ $customer->last_name }}</td>
			<td>{{ date("F, d Y", strtotime($customer->created_date)) }}</td>
			<td>{{ $customer->email == "" ? "N/A" : $customer->email }}</td>
			<td>{{ $customer->contact_number == "" ? "N/A" : $customer->contact_number }}</td>
			<td>{{ $customer->bday }}</td>
			<td>{{ $customer->gender }}</td>
			<td class="text-center">
				<a href="/momai/edit?id={{ $customer->customer_id }}">EDIT</a> |
				<a onclick="return confirm('Are you sure you want to delete?')" href="/momai/delete?id={{ $customer->customer_id }}">DELETE</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection