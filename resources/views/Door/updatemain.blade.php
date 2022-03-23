@extends('layouts.app3')
@section('content')
  <!-- general form elements disabled -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Add Door category</h3>
      <a href="{{route('door.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" action="{{route('door.updatemain')}}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$editmain->id}}">
        <div class="row">
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{$editmain->door_main_name}}" placeholder="">
              @error('door_main_name')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <!-- text input -->
            <div class="form-group">
              <label>Category Stock</label>
              <input type="text" name="door_main_stock" id="door_main_stock" class="form-control @error('door_main_stock') is-invalid @enderror" value="{{$editmain->door_main_stock}}" placeholder="">
              @error('door_main_stock')
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
              <textarea class="form-control" rows="3" name="door_main_details" id="door_main_details" class="form-control @error('door_main_details') is-invalid @enderror" value="{{$editmain->door_main_details}}" placeholder=""></textarea>
              @error('door_main_details')
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