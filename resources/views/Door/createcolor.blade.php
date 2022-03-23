@extends('layouts.app3')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add Door Color</h3>
			<a href="{{route('door.indexcolor')}}" class="btn btn-info" style="float:right;">Show Door Color</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('door.storecolor')}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Color Name</label>
							<input type="text" name="color_name" id="color_name" class="form-control @error('color_name') is-invalid @enderror" value="{{old('color_name')}}" placeholder="">
							@error('color_name')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Color Price</label>
							<input type="text" name="color_price" id="color_price" class="form-control @error('color_price') is-invalid @enderror" value="{{old('color_price')}}" placeholder="">
							@error('color_price')
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
							<label>Color Details</label>
							<textarea class="form-control" rows="3" name="color_details" id="color_details" class="form-control @error('color_details') is-invalid @enderror" value="{{old('color_details')}}" placeholder=""></textarea>
							@error('color_details')
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