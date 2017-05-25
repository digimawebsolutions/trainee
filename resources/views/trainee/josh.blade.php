@extends('trainee.layout')
@section('content')

<div class="clearfix">
	<h3 class="pull-left">Customer List</h3>
	<div class="pull-right"><button  onclick="location.href='/josh/add'" class="btn btn-primary">Add Customer</button></div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>Date Created</th>
			<th>E-mail</th>
			<th>Contact #</th>
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
			<td class="text-center">
				<a href="/josh/edit?id={{ $customer->customer_id }}">EDIT</a> |
				<a onclick="return confirm('Are you sure you want to delete?')" href="/josh/delete?id={{ $customer->customer_id }}">DELETE</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@endsection