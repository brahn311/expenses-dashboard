@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Delete Account Type {{ $type->id }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="links">
				<a href="/account_types">Back</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form action="/account_types/{{ $type->id }}" method="POST">
					@csrf
					@method('delete')
					<button class="btn btn-primary" type="submit" >Submit</button>
				</form>
			</div>
		</div>
	</div>
@endsection('content')
