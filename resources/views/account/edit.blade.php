@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Edit Account {{ $account->id }}</h1>
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
				<a href="/accounts">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/accounts/{{ $account->id }}" method="POST">
					@csrf
					@method('put')
					<div class="form-group">
						<label for="number">Number:</label>
						<input type="text" class="form-control" id="number" name="number" value="{{ $account->number }}" autocomplete="off" placeholder="Type an account number">
					</div>
					<div class="form-group">
						<label for="type_id">Type:</label>
						<select class="form-control" id="type_id" name="type_id">
							@forelse ($types as $type)
								@if ($account->type_id == $type->id)
									<option selected value="{{ $type->id }}">{{ $type->name }}</option>
								@else
									<option value="{{ $type->id }}">{{ $type->name }}</option>
								@endif
							@empty
							    <option disabled>No account type</option>
							@endforelse
						</select>
					</div>
					<div class="form-group">
						<label for="bank_id">Bank:</label>
						<select class="form-control" id="bank_id" name="bank_id">
							@forelse ($banks as $bank)
								@if ($account->bank_id == $bank->id)
									<option selected value="{{ $bank->id }}">{{ $bank->name }}</option>
								@else
									<option value="{{ $bank->id }}">{{ $bank->name }}</option>
								@endif
							@empty
								<option disabled>No banks</option>
							@endforelse
						</select>
					</div>
					<div class="form-group">
						<label for="branch">Branch:</label>
						<input type="text" class="form-control" id="branch" name="branch" value="{{ $account->branch }}" autocomplete="off" placeholder="Select a branch">
					</div>
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection('content')
