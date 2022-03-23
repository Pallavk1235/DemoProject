@extends('layouts.app3')
@section('content')
	<!-- general form elements disabled -->
	<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add Subcategory</h3>
			<a href="{{route('glass.materialindex')}}" class="btn btn-info" style="float:right;">Show Subcategory</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('glass.updatematerial')}}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$updatematerial->id}}">
				<div class="row">
					<div class="col-sm-12">
						<!-- text input -->
						<div class="form-group">
							<label>Material Name</label>
							<input type="text" name="glass_matrial_name" id="glass_matrial_name" class="form-control @error('glass_matrial_name') is-invalid @enderror" value="{{$updatematerial->glass_matrial_name}}" placeholder="">
							@error('glass_matrial_name')
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
							<textarea class="form-control" rows="3" name="glass_matrial_details" id="glass_matrial_details" class="form-control @error('glass_matrial_details') is-invalid @enderror" value="{{$updatematerial->glass_matrial_details}}" placeholder=""></textarea>
							@error('glass_matrial_details')
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