@extends('layouts.app3')
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<div class="card card-warning">
		<div class="card-header">
			<h3 class="card-title">Update Width</h3>
			<a href="{{route('benchtop.indexwidth')}}" class="btn btn-info" style="float:right;">Show Update Width</a>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<form role="form" action="{{route('benchtop.updatewidth')}}" method="POST">
				@csrf
				<input type="hidden" name="id" value="{{$editwidth->id}}">
				<div class="row">
					<div class="col-sm-6">
						<!-- text input -->
						<div class="form-group">
							<label>Width</label>
							<input type="text" name="width" id="width" class="form-control @error('width') is-invalid @enderror" value="{{$editwidth->width}}" placeholder="">
							@error('width')
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