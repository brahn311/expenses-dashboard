@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>New Holder</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/holders">Back</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row justify-content-md-center">
			<div class="col"></div>
			<div class="col">
				<form action="/holders" method="POST">
					@csrf
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="name">First name:</label>
							<input type="text" class="form-control" id="first_name" name="first_name" autocomplete="off" placeholder="Type a first name">
						</div>
						<div class="form-group col-md-6">
							<label for="name">Last name:</label>
							<input type="text" class="form-control" id="last_name" name="last_name" autocomplete="off" placeholder="Type a last name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="type_id">Type:</label>
							<select class="form-control" id="type_id" name="type_id">
								<option selected disabled>Select account type</option>
								@forelse ($types as $type)
									<option value="{{ $type->id }}">{{ $type->name }}</option>
								@empty
								    <option disabled="">No account type</option>
								@endforelse
							</select>
						</div>
						@error('type_id')
							<div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-group  col-md-8">
							<label for="name">Document Identity:</label>
							<input type="text" class="form-control" id="document" name="document" autocomplete="off" placeholder="Type a document identity">
						</div>
					</div>
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
			<div class="col"></div>
		</div>
	</div>
@endsection('content')
