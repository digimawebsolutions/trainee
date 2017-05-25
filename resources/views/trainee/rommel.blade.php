@extends('trainee.layout')
@section('content')

<table class="table">
	<thead>
		<tr>
			<th>FIRST NAME</th>
			<th>LAST NAME</th>
			<th>DATE CREATED</th>
		</tr>
	</thead>
	<tbody>
		@foreach($_customer as $customer)
		<tr>
			<td>{{ $customer->first_name }}</td>
			<td>{{ $customer->last_name }}</td>
			<td>{{ $customer->created_date }}</td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection