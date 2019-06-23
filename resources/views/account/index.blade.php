@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Accounts List</h1>
				<table class="table">
					@foreach($accounts as $account)
						<tr>
							<td>{{ $account->number }}</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection('content')
