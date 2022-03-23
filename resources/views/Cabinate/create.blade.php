@extends('layouts.app3')
@section('content')
<!-- general form elements disabled -->

<div class="row">
  <div class="col-md-6">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Add Cabinate category</h3>
        {{-- <a href="{{route('door.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a> --}}
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" action="{{route('door.storemain')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-12">
              <!-- text input -->
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="">
                @error('door_main_name')
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
  </div>
  
  <div class="col-md-6">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Add Cabinate type</h3>
        {{-- <a href="{{route('door.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a> --}}
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form role="form" action="{{route('door.storemain')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-12">
              <!-- text input -->
              <div class="form-group">
                <label>Category Name</label>
                <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="">
                @error('door_main_name')
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
  </div>
</div>


<div class="row mt-5">
    <div class="col-md-12">
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Add Cabinate Subtypecategory</h3>
          {{-- <a href="{{route('door.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <form role="form" action="{{route('door.storemain')}}" method="POST">
            @csrf
            <div class="row">
              <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" name="door_main_name" id="door_main_name" class="form-control @error('door_main_name') is-invalid @enderror" value="{{old('door_main_name')}}" placeholder="">
                  @error('door_main_name')
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
  </div>
</div>
@endsection