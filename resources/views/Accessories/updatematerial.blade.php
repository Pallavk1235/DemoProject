@extends('layouts.app3')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Update Accessories Materials</h3>
			<a href="{{route('accessories.indexmaterials')}}" class="btn btn-info" style="float:right;">Show Accessories Materials</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('accessories.updatematerials')}}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$editmat->id}}">
				<div class="row">
					<div class="col-sm-12">
						<!-- text input -->
						<div class="form-group">
							<label>Material Name</label>
							<input type="text" name="material_name" id="material_name" class="form-control @error('material_name') is-invalid @enderror" value="{{$editmat->material_name}}" placeholder="">
							@error('material_name')
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
							<label>Material Details</label>
							<textarea class="form-control" rows="3" name="material_detail" id="material_detail" class="form-control @error('material_detail') is-invalid @enderror" value="{{$editmat->material_detail}}" placeholder=""></textarea>
							@error('material_detail')
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