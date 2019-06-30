@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Statuses List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/statuses/create">New Status</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($statuses as $status)
						<tr>
							<td>{{ $status->id }}</td>
							<td>{{ $status->name }}</td>
							<td><a href="/statuses/{{ $status->id }}/edit">Edit</a></td>
							<td><a href="/statuses/{{ $status->id }}/confirm_delete">Delete</a></td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
