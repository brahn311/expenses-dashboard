@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>New Account</h1>
			</div>
		</div>
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="row">
			<div class="links">
				<a class="btn btn-secondary" href="/accounts">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/accounts" method="POST">
					@csrf
					<div class="form-group">
						<label for="number">Number:</label>
						<input type="text" class="form-control" id="number" name="number" value="{{ old('number') }}" autocomplete="off" placeholder="Type an account number">
					</div>
					<div class="form-group">
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
					<div class="form-group">
						<label for="bank_id">Bank:</label>
						<select class="form-control" id="bank_id" name="bank_id">
							<option selected disabled>Select bank</option>
							@forelse ($banks as $bank)
								<option value="{{ $bank->id }}">{{ $bank->name }}</option>
							@empty
								<option disabled>No bank</option>
							@endforelse
						</select>
					</div>
					<div class="form-group">
						<label for="branch">Branch:</label>
						<input type="text" class="form-control" id="branch" name="branch"  autocomplete="off" placeholder="Select a branch">
					</div>
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection('content')
