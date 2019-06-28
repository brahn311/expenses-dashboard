@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Delete Bank {{ $bank->id }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="links">
				<a href="/banks">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/banks/{{ $bank->id }}" method="POST">
					@csrf
					@method('delete')
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection('content')
