@extends('layouts.app3')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="col-md-12">
	<!-- general form elements disabled -->
	<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add New Customer</h3>
			<a href="{{route('customers.index')}}" class="btn btn-info" style="float:right;">Show Customers</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('customers.store')}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Firstname</label>
							<input type="text" name="firstname" id="firstname" class="form-control @error('firstname') is-invalid @enderror" value="{{old('firstname')}}" placeholder="">
							@error('firstname')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Lastname</label>
							<input type="text" name="lastname" id="lastname" class="form-control @error('lastname') is-invalid @enderror" value="{{old('lastname')}}" placeholder="">
							@error('lastname')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!-- textarea -->
						<div class="form-group">
							<label>Textarea</label>
							<textarea class="form-control" rows="3" name="address" id="address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}" placeholder=""></textarea>
							@error('address')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
				</div>

				<!-- input states -->
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>State</label>
							<input type="text" name="state" id="state" class="form-control @error('state') is-invalid @enderror" value="{{old('state')}}" placeholder="">
							@error('state')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label>Postcode</label>
							<input type="text" name="postcode" id="postcode" class="form-control @error('postcode') is-invalid @enderror" value="{{old('postcode')}}" placeholder="">
							@error('postcode')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label>Home Phone</label>
							<input type="text" name="home_phone" id="name" class="form-control @error('home_phone') is-invalid @enderror" value="{{old('home_phone')}}" placeholder="">
							@error('home_phone')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Work Phone</label>
							<input type="text" name="work_phone" id="work_phone" class="form-control @error('work_phone') is-invalid @enderror" value="{{old('name')}}" placeholder="">
							@error('work_phone')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Office Phone</label>
							<input type="text" name="office_phone" id="office_phone" class="form-control @error('office_phone') is-invalid @enderror" value="{{old('office_phone')}}" placeholder="">
							@error('office_phone')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>	
					</div>
				</div>
			</form>
		</div>
		<!-- /.card-body -->
	</div>
@endsection