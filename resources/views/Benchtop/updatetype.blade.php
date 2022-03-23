@extends('layouts.app3')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add Benchtop-type</h3>
			<a href="{{route('benchtop.indextype')}}" class="btn btn-info" style="float:right;">Show Benchtop-type</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('benchtop.updatetype')}}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$edittype->id}}">
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Type</label>
							<input type="text" name="benchtop_type_name" id="benchtop_type_name" class="form-control @error('benchtop_type_name') is-invalid @enderror" value="{{$edittype->benchtop_type_name}}" placeholder="">
							@error('benchtop_type_name')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Price</label>
							<input type="text" name="benchtop_type_price" id="benchtop_type_price" class="form-control @error('benchtop_type_price') is-invalid @enderror" value="{{$edittype->benchtop_type_price}}" placeholder="">
							@error('benchtop_type_price')
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
							<label>Details</label>
							<textarea rows="3" name="benchtop_type_details" id="benchtop_type_details" class="form-control @error('benchtop_type_details') is-invalid @enderror" value="{{$edittype->benchtop_type_details}}" placeholder=""></textarea>
							@error('benchtop_type_details')
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