@extends('layouts.app3')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add Door Finishing</h3>
			<a href="{{route('door.indexfinishing')}}" class="btn btn-info" style="float:right;">Show Door Finishing</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('door.storefinishing')}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Finishing Name</label>
							<input type="text" name="finshing_name" id="finshing_name" class="form-control @error('finshing_name') is-invalid @enderror" value="{{old('finshing_name')}}" placeholder="">
							@error('finshing_name')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Finishing Price</label>
							<input type="text" name="finshing_price" id="finshing_price" class="form-control @error('finshing_price') is-invalid @enderror" value="{{old('finshing_price')}}" placeholder="">
							@error('finshing_price')
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
							<label>Finishing Details</label>
							<textarea class="form-control" rows="3" name="finshing_details" id="finshing_details" class="form-control @error('finshing_details') is-invalid @enderror" value="{{old('finshing_details')}}" placeholder=""></textarea>
							@error('finshing_details')
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