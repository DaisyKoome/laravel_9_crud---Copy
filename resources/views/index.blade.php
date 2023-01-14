@extends('master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Student Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('students.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>TV brand</th>
				<th>TV model</th>
				<th>TV condition</th>
				<th>Packaging</th>
				<th>TV age</th>
				<th>TV accessories</th>
				<th>TV value</th>
				<th>TV upgrade</th>
				<th>Topup amount</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->tv_brand }}</td>
						<td>{{ $row->tv_model }}</td>
						<td>{{ $row->tv_condition }}</td>
						<td>{{ $row->packaging }}</td>
						<td>{{ $row->tv_age }}</td>
						<td>{{ $row->tv_accessories }}</td>
						<td>{{ $row->tv_value }}</td>
						<td>{{ $row->tv_upgrade }}</td>
						<td>{{ $row->topup_amount }}</td>
						<td>
							<a href="{{ route('tradeins.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection