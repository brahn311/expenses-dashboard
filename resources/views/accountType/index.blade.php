@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Account Types List</h1>
			</div>
		</div>
		<div class="row">
			<div class="links">
				<a class="btn btn-secondary" href="/account_types/create">New Account Type</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($account_types as $account_type)
						<tr>
							<td>{{ $account_type->name }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
