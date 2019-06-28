@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Account Types List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/account_types/create">New Account Type</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($account_types as $account_type)
						<tr>
							<td>{{ $account_type->name }}</td>
							<td><a href="/account_types/{{ $account_type->id }}/edit">Edit</a></td>
							<td><a href="/account_types/{{ $account_type->id }}/confirm_delete">Delete</a></td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
