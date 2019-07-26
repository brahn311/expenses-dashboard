@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>New Transaction</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/transactions">Back</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row justify-content-md-center">
			<div class="col">
				<form action="/transactions" method="POST">
					@csrf
					<div class="form-row">
						<div class="form-group col-md">
							<label for="account_id">Account:</label>
							<select class="form-control form-control-md" id="document_type_id" name="document_type_id">
								<option selected disabled>...</option>
								@forelse($accounts as $account)
									<option value="{{ $account->id }}">{{ $account->number }} - {{ $account->bank_id }}</option>
								@empty
									<option>Null</option>
								@endforelse
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="status_id">Status:</label>
							<select class="form-control form-control-md" id="staus_id" name="staus_id">
								<option selected disabled>...</option>
								@forelse($statuses as $status)
									<option value="{{ $status->id }}">{{ $status->name }}</option>
								@empty
									<option>Null</option>
								@endforelse
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="category_id">Category</label>
							<select class="form-control form-control-md" id="category_id" name="category_id">
								<option selected disabled>...</option>
								@forelse($categories as $category)
									<option value="{{ $category->id }}">{{ $category->name }}</option>
								@empty
									<option>Null</option>
								@endforelse
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="date">Date:</label>
							<input type="text" class="form-control form-control-md" id="date" name="date" value="" autocomplete="off" placeholder="DD/MM/YYYY">
						</div>
						<div class="form-group col-md-2">
							<label for="reference">Reference:</label>
							<input type="text" class="form-control form-control-md" id="reference" name="reference" value="" autocomplete="off" placeholder="Nº Ref.">
						</div>
						<div class="form-group col-md">
							<label for="description">Description:</label>
							<input type="text" class="form-control" id="description" name="description" autocomplete="off" placeholder="Type a description">
						</div>
						<div class="form-group col-md-2">
							<label for="amount">Amount:</label>
							<input type="text" class="form-control form-control-md" id="amount" name="amount" value="" autocomplete="off" placeholder="Type numbers">
						</div>
					</div>
					@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
					@enderror
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection('content')
