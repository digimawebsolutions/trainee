@extends('trainee.layout')
@section('content')


<style type="text/css">

		#grad {
		  background: black; /* For browsers that do not support gradients */
		  background: -webkit-linear-gradient(left,rgb(255, 255, 255), rgb(128, 128, 128)); /*Safari 5.1-6*/
		  background: -o-linear-gradient(right,rgb(255, 255, 255), rgb(128, 128, 128)); /*Opera 11.1-12*/
		  background: -moz-linear-gradient(right,rgb(255, 255, 255), rgb(128, 128, 128)); /*Fx 3.6-15*/
		  background: linear-gradient(to right, rgb(255, 255, 255), rgb(128, 128, 128)); /*Standard*/
		}

</style>

<div class="clearfix" id="grad">
	<h3 class="pull-left">Product List</h3>
	{{-- <div class="pull-right"><button onclick="location.href='/rommel/add'" class="btn btn-primary">Add Product</button></div> --}}
</div>
<br>
<div class="pull-right">
    <button button onclick="location.href='/rommel/add'" type="button" class="btn btn-primary btn-sm">
    	<span class="glyphicon glyphicon-plus-sign"></span> ADD PRODUCT
    </button>
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