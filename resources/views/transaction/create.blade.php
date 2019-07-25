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

					<div class="form-group">
						<label for="account_id">Account Number:</label>
						<select class="form-control" id="document_type_id" name="document_type_id">
							<option selected disabled>...</option>
							@forelse($accounts as $account)
								<option value="{{ $account->id }}">{{ $account->name }}</option>
							@empty
								<option>Not Set</option>
							@endforelse
						</select>
					</div>

					<label for="reference">Reference:</label>
					<div class="form-group">
						<input type="text" class="form-control form-control-lg" id="reference" name="reference" value="" autocomplete="off" placeholder="Type an reference">
					</div>

					<!--
					<div class="form-group">
						<label for="date">Date:</label>
						<input type="text" class="form-control form-control-lg" id="date" name="date" value="" autocomplete="off" placeholder="Type an date">
					</div>

					<div class="form-group">
						<label for="amount">Amount:</label>
						<input type="text" class="form-control form-control-lg" id="amount" name="amount" value="" autocomplete="off" placeholder="Type an amount">
					</div>

					<div class="form-group">
						<label for="category_id">category_id</label>
						<input type="text" class="form-control form-control-lg" id="category_id" name="category_id" value="" autocomplete="off" placeholder="Type an category_id">
					</div>

					<div class="form-group">
						<label for="status_id">status_id</label>
						<input type="text" class="form-control form-control-lg" id="status_id" name="status_id" value="" autocomplete="off" placeholder="Type an status_id">
					</div>
					-->

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
							<select class="form-control" id="document_type_id" name="document_type_id">
								<option selected>...</option>
								@forelse($accounts as $account)
									<option value="{{ $account->id }}">{{ $account->name }}</option>
								@empty
									<option>Not Set</option>
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
		</div>
	</div>
@endsection('content')
