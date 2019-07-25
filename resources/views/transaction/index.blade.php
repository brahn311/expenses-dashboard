@extends('layout.base')

@section('content')
	<div class="content">
		<div class="row">
			<div class="col">
				<h1>Transactions List</h1>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="links">
					<a href="/">Home</a>
					<a href="/transactions/create">New Transaction</a>
				</div>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th>id</th>
							<th>account_id</th>
							<th>date</th>
							<th>reference</th>
							<th>amount</th>
							<th>category_id</th>
							<th>status_id</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						@forelse($transactions as $transaction)
							<tr>
								<td>{{ $transaction->id }}</td>
								<td>{{ $transaction->account_id }}</td>
								<td>{{ $transaction->date }}</td>
								<td>{{ $transaction->account_id }}</td>
								<td>{{ $transaction->amount }}</td>
								<td>{{ $transaction->category_id }}</td>
								<td>{{ $transaction->status_id }}</td>
								<td>
									<a href="/transactions/{{ $transaction->id }}/edit">Edit</a>
									<a href="/transactions/{{ $transaction->id }}/confirm_delete">Delete</a>
								</td>
							</tr>
						@empty
							<tr><td colspan="8">No results</td></tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection('content')
