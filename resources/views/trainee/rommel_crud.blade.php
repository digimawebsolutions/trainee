@extends('trainee.layout')
@section('content')

<div class="clearfix">
	<h3 class="pull-left">Product List</h3>
	<div class="pull-right"><button onclick="location.href='/rommel/add'" class="btn btn-primary">Add Product</button></div>
</div>

<table class="table table-striped">
	
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Quantity</th>
			<th></th>
		</tr>
	</thead>

	<tbody>

	@foreach($_product as $product)

		<tr>

			<td>{{ $product->product_id }}</td>
			<td>{{ $product->product_name }}</td>
			<td>{{ $product->product_description == "" ? "N/A" : $product->product_description}}</td>
			<td>{{ $product->product_price == "" ? "N/A" : $product->product_price}}</td>
			<td>{{ $product->product_quantity }}</td>

			<td class="text-center">
				<a href="/rommel/edit?id={{ $product->product_id }}">EDIT</a> |
				<a style="color: red" onclick="return confirm('Are you sure you want to delete?')" href="/rommel/delete?id={{ $product->product_id }}">DELETE</a>
			</td>
		</tr>

	@endforeach

	</tbody>
</table>
@endsection