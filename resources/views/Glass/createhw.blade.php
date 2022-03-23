@extends('layouts.app3')
@section('content')
<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Add Height-Widht</h3>
			<a href="{{route('glass.hwindex')}}" class="btn btn-info" style="float:right;">Show Height-Width</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('glass.storehw')}}" method="POST">
				@csrf
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Height</label>
							<input type="text" name="glass_height" id="glass_height" class="form-control @error('glass_height') is-invalid @enderror" value="{{old('glass_height')}}" placeholder="">
							@error('glass_height')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>width</label>
							<input type="text" name="glass_width" id="glass_width" class="form-control @error('glass_width') is-invalid @enderror" value="{{old('glass_width')}}" placeholder="">
							@error('glass_width')
							<span class="invalid-feedback" role='alert'>
								<strong>{{ $message }}</strong>						
							</span>
							@enderror
						</div>
					</div>
				</div>
				{{-- <div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
						
                        <label>Select Main Catregory</label>
                        <select class="form-control" name='glass_parent_id'>
                        	@foreach($mainglass as $items)
                          		<option value="{{$items->id}}">{{$items->glass_name}}</option>
                          	@endforeach
                        </select>
						</div>
					</div>
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
                        <label>Select Sub Catregory</label>
                        <select class="form-control" name='glass_child_id'>
                        	@foreach($subglass as $item)
                          		<option value="{{$item->id}}">{{$item->glass_child_name}}</option>
                          	@endforeach
                        </select>
						</div>
					</div>
				</div> --}}	
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