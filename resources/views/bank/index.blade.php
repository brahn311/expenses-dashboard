@extends('layout.laravel-base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Banks List</h1>
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
