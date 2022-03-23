@extends('layouts.app3')
@section('content')
	<!-- general form elements disabled -->
	<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add Subcategory</h3>
			<a href="{{route('glass.subtypeindex')}}" class="btn btn-info" style="float:right;">Show Subcategory</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('glass.storesubtype')}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-5">
						<!-- text input -->
						<div class="form-group">
						
                        <label>Select Main Catregory</label>
                        <select class="form-control" name='glass_parent_id'>
                        	@foreach($pid as $item)
                          		<option value="{{$item->id}}">{{$item->glass_name}}</option>
                          	@endforeach
                        </select>
						</div>
					</div>
					<div class="col-sm-5">
						<!-- text input -->
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="glass_child_name" id="glass_child_name" class="form-control @error('glass_child_name') is-invalid @enderror" value="{{old('glass_child_name')}}" placeholder="">
							@error('glass_child_name')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-2">
						<!-- text input -->
						<div class="form-group">
							<label>Stock</label>
							<input type="text" name="glass_child_stock" id="glass_child_stock" class="form-control @error('glass_child_stock') is-invalid @enderror" value="{{old('glass_child_stock')}}" placeholder="">
							@error('glass_child_stock')
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
							<textarea class="form-control" rows="3" name="glass_child_details" id="glass_child_details" class="form-control @error('glass_child_details') is-invalid @enderror" value="{{old('glass_child_details')}}" placeholder=""></textarea>
							@error('glass_child_details')
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