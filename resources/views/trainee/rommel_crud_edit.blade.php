@extends('trainee.layout')
@section('content')

<form method="post">

	{{ csrf_field() }}

	<div class="clearfix">
		<h3 class="pull-left">Product Edit</h3>
		<div class="pull-right"><button onclick="location.href='/rommel'" class="btn btn-primary">Back</button></div>
	</div>
	
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Name</label>
				<div class="col-10">
					<input name="product_name" class="form-control" type="text" value="{{ $product->product_name }}" id="example-text-input">
				</div>
			</div>
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Description</label>
				<div class="col-10">
					<input name="product_description" class="form-control" type="text" value="{{ $product->product_description }}" id="example-text-input">
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Price</label>
				<div class="col-10">
					<input name="product_price" class="form-control" type="text" value="{{ $product->product_price }}" id="example-text-input">
				</div>
			</div>
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Quantity</label>
				<div class="col-10">
					<input name="product_quantity" class="form-control" type="text" value="{{ $product->product_quantity }}" id="example-text-input">
				</div>
			</div>
		</div>
		
	</div>

	<div class="row">
		<div class="col-md-12 text-right">
			<button type="button" class="btn btn-default">CANCEL</button>
			<button type="submit" class="btn btn-primary">SAVE</button>
		</div>
	</div>
</form>
@endsection