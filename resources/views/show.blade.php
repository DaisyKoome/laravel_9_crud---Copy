@extends('master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Tradein Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('tradeins.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>TV brand</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_brand }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>TV model</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_model }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>TV condition</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_condition }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Packaging</b></label>
			<div class="col-sm-10">
				{{ $tradein->packaging }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>TV age</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_age }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>TV accessories</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_accessories }}
			</div>
		</div>	
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>TV value</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_value }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>TV upgrade</b></label>
			<div class="col-sm-10">
				{{ $tradein->tv_upgrade }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>TV topup amount</b></label>
			<div class="col-sm-10">
				{{ $tradein->topup_amount }}
			</div>
		</div>

@endsection('content')
