@extends('layouts.app3')
@section('content')
  <!-- general form elements disabled -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Add Steel category</h3>
      <a href="{{route('steel.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" action="{{route('steel.storemain')}}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="steel_name" id="steel_name" class="form-control @error('steel_name') is-invalid @enderror" value="{{old('steel_name')}}" placeholder="">
              @error('steel_name')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Category Stock</label>
              <input type="text" name="steel_stock" id="steel_stock" class="form-control @error('steel_stock') is-invalid @enderror" value="{{old('steel_stock')}}" placeholder="">
              @error('steel_stock')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Category Price</label>
              <input type="text" name="steel_price" id="steel_price" class="form-control @error('steel_price') is-invalid @enderror" value="{{old('steel_price')}}" placeholder="">
              @error('steel_price')
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
              <textarea class="form-control" rows="3" name="steel_details" id="steel_details" class="form-control @error('steel_details') is-invalid @enderror" value="{{old('steel_details')}}" placeholder=""></textarea>
              @error('steel_details')
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