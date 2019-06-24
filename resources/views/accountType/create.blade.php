@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>New Account Type</h1>
			</div>
		</div>
		<div class="row">
			<div class="links">
				<a class="btn btn-secondary" href="/account_types">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/account_types" method="POST">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" name="name"  autocomplete="off" placeholder="Type a name">
					</div>
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection('content')
