@extends('trainee.layout')
@section('content')
<form method="post">
	{{ csrf_field() }}
	<div class="clearfix">
		<h3 class="pull-left">Customer Add</h3>
		<div class="pull-right"><button type="button" onclick="location.href='/josh'" class="btn btn-primary">Back</button></div>
	</div>


	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">First Name</label>
				<div class="col-10">
					<input name="first_name" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Last Name</label>
				<div class="col-10">
					<input name="last_name" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">E-Mail</label>
				<div class="col-10">
					<input name="email" class="form-control" type="text" value="" id="example-text-input">
				</div>
			</div>
			<div class="form-group">
				<label for="example-text-input" class="col-2 col-form-label">Contact Number</label>
				<div class="col-10">
					<input name="contact_number" class="form-control" type="text" value="" id="example-text-input">
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