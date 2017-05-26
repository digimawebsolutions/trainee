@extends('trainee.layout')
@section('content')

<table class="table table-bordered">
	<thead>
		<tr>
			<th>PRODUCT NAME</th>
			<th>PRODUCT DESCRIPTION</th>
		</tr>
	</thead>

	<tbody>
	
		@foreach($_product as $product)
	
		<tr>
			<td>{{ $product->product_name }}</td>
			<td>{{ $product->product_description }}</td>
		</tr>
	
		@endforeach
	
	</tbody>

</table>

@endsection