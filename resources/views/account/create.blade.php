@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>New Account</h1>
			</div>
		</div>
		<div class="row">
			<div class="links">
				<a class="btn btn-secondary" href="/accounts">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/banks" method="POST">
					<div class="form-group">
						<label for="number">Number:</label>
						<input type="text" class="form-control" id="number" name="number"  autocomplete="off" placeholder="Type an account number">
					</div>
					<div class="form-group">
						<label for="type_id">Type:</label>
						<select class="form-control" id="exampleFormControlSelect1">
							@forelse ($types as $type)
								<option value="{{ $type->id }}">{{ $type->name }}</option>
							@empty
							    <option disabled="" >No account types</option>
							@endforelse
						</select>
					</div>
					<div class="form-group">
						<label for="bank_id">Bank:</label>
						<select class="form-control" id="exampleFormControlSelect2">
							@forelse ($banks as $bank)
								<option value="{{ $bank->id }}">{{ $bank->name }}</option>
							@empty
								<option disabled="" >No banks</option>
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
