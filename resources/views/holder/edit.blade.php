@extends('layout.base')

@section('content')
<div class="content">
	<div class="row">
		<div class="col">
			<h1>Edit Holder:</h1>
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
	@if($errors->any())
	<div class="row justify-content-md-center">
		<div class="col"></div>
		<div class="col">
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
		<div class="col"></div>
	</div>
	@endif
	<div class="row justify-content-md-center">
		<div class="col"></div>
		<div class="col">
			<form action="/holders/{{ $holder->id }}" method="POST">
				@csrf
				@method('put')
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="name">First name:</label>
						<input type="text" class="form-control" id="first_name" name="first_name" autocomplete="off" value="{{ $holder->first_name }}" placeholder="Type a first name">
					</div>
					<div class="form-group col-md-6">
						<label for="name">Last name:</label>
						<input type="text" class="form-control" id="last_name" name="last_name" autocomplete="off" value="{{ $holder->last_name }}" placeholder="Type a last name">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="type_id">Type:</label>
						<select class="form-control" id="document_type_id" name="document_type_id">
							<option selected disabled>...</option>
							@foreach($types as $type)
								@if ($holder->document_type_id == $type->id)
									<option selected value="{{ $type->id }}">{{ $type->name }}</option>
								@else
									<option value="{{ $type->id }}">{{ $type->name }}</option>
								@endif
							@endforeach
						</select>
					</div>
					<div class="form-group  col-md-8">
						<label for="name">Document Identity:</label>
						<input type="text" class="form-control" id="document" name="document" autocomplete="off" value="{{ $holder->document }}" placeholder="Type a document identity">
					</div>
				</div>
				<button class="btn btn-primary" type="submit" >Submit</button>
			</form>
		</div>
		<div class="col"></div>
	</div>
</div>
@endsection('content')
