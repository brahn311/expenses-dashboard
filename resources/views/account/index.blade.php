@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Accounts List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/accounts/create">New Account</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($accounts as $account)
						<tr>
							<td>{{ $account->number }}</td>
							<td><a href="/accounts/{{ $account->id }}/edit">Edit</a></td>
							<td><a href="/accounts/{{ $account->id }}/confirm_delete">Delete</a></td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
