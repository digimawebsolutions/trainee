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


<form method="post">
	
	{{ csrf_field() }} 

	<div class="clearfix" id="grad">
		<h3 class="pull-left">Product Add</h3>
		{{-- <div class="pull-right"><button onclick="location.href='/rommel'" class="btn btn-primary">Back</button></div> --}}
	</div>
	<br>
		<div class="pull-right"><button onclick="location.href='/rommel'" type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-circle-arrow-left"></span> BACK </button></div>
	<br>
	<div class="col-md-6">
		<div class="row">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Name</label>
				<div class="col-10">
					<input name="product_name" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Description</label>
				<div class="col-10">
					<input name="product_description" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
		</div>
	</div>
		<div class="col-md-5">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Price</label>
				<div class="col-10">
					<input name="product_price" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Product Quantity</label>
				<div class="col-10">
					<input name="product_quantity" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-right">
				<button type="button" class="btn btn-default btn-sm">CANCEL</button>
				<button type="submit" class="btn btn-primary btn-sm">SAVE</button>
				{{-- <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span> SAVE </button> --}}
			</div>
		</div>
	</form>
@endsection
</script>