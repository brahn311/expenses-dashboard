@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Banks List</h1>
			</div>
		</div>
		<div class="row">
			<div class="links">
				<a class="btn btn-secondary" href="/banks/create">New Bank</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table">
					@foreach($banks as $bank)
						<tr>
							<td>{{ $bank->name }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
