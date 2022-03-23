@extends('layouts.app3')
@section('content')
  <!-- general form elements disabled -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Update Accessories category</h3>
      <a href="{{route('accessories.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" action="{{route('accessories.updatemain')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$editmain->id}}">
        <div class="row">
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="accessories_name" id="accessories_name" class="form-control @error('accessories_name') is-invalid @enderror" value="{{$editmain->accessories_name}}" placeholder="">
              @error('accessories_name')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="accessories_stock" id="accessories_stock" class="form-control @error('accessories_stock') is-invalid @enderror" value="{{$editmain->accessories_stock}}" placeholder="">
              @error('accessories_stock')
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
              <input type="text" name="accessories_price" id="accessories_price" class="form-control @error('accessories_price') is-invalid @enderror" value="{{$editmain->accessories_price}}" placeholder="">
              @error('accessories_price')
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
              <textarea class="form-control" rows="3" name="accessories_details" id="accessories_details" class="form-control @error('accessories_details') is-invalid @enderror" value="{{$editmain->accessories_details}}" placeholder=""></textarea>
              @error('accessories_details')
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
            <button type="submit" class="btn btn-primary" style="float:right;">Update</button>  
          </div>
        </div>
      </form>
    </div>
    <!-- /.card-body -->
  </div>
@endsection