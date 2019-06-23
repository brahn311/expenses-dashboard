@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Account Types List</h1>
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
