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
			<a href="{{route('benchtop.indexmaterials')}}" class="btn btn-info" style="float:right;">Show Benchtop-type</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('benchtop.storematerials')}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Material Name</label>
							<input type="text" name="benchtop_material_name" id="benchtop_material_name" class="form-control @error('benchtop_material_name') is-invalid @enderror" value="{{old('benchtop_material_name')}}" placeholder="">
							@error('benchtop_material_name')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Material Stock</label>
							<input type="text" name="benchtop_material_stock" id="benchtop_material_stock" class="form-control @error('benchtop_material_stock') is-invalid @enderror" value="{{old('benchtop_material_stock')}}" placeholder="">
							@error('benchtop_material_stock')
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
							<textarea class="form-control" rows="3" name="benchtop_material_details" id="benchtop_material_details" class="form-control @error('benchtop_material_details') is-invalid @enderror" value="{{old('benchtop_material_details')}}" placeholder=""></textarea>
							@error('benchtop_material_details')
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