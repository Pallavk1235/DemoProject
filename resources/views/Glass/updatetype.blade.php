@extends('layouts.app3')
@section('content')
	<!-- general form elements disabled -->
	<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Update Category</h3>
			<a href="{{route('glass.typeindex')}}" class="btn btn-info" style="float:right;">Show Type</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('glass.updatetype')}}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$glassdata->id}}">
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Type Name</label>
							<input type="text" name="glass_name" id="glass_name" class="form-control @error('glass_name') is-invalid @enderror" value="{{$glassdata->glass_name}}" placeholder="">
							@error('glass_name')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Stock</label>
							<input type="text" name="glass_stock" id="glass_stock" class="form-control @error('glass_stock') is-invalid @enderror" value="{{$glassdata->glass_stock}}" placeholder="">
							@error('glass_stock')
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
							<textarea rows="3" name="glass_details" id="glass_details" class="form-control @error('glass_details') is-invalid @enderror" value="{{$glassdata->glass_details}}" placeholder=""></textarea>
							@error('glass_details')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
				</div>		
				<!-- input states -->
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