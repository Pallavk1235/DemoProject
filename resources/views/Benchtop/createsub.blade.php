@extends('layouts.app3')
@section('content')
  <!-- general form elements disabled -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Add Benchtop category</h3>
      <a href="{{route('benchtop.indexsub')}}" class="btn btn-info" style="float:right;">Show Category</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" action="{{route('benchtop.storesub')}}" method="POST">
        @csrf
        <div class="row">
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">

              <label>Select Benchtop type</label>
              <select class="form-control" name='benchtop_parent_id'>
                @foreach($mainid as $item)
                <option value="{{$item->id}}">{{$item->benchtop_parent_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">
              <label>Subcategory Name</label>
              <input type="text" name="benchtop_child_name" id="benchtop_child_name" class="form-control @error('benchtop_child_name') is-invalid @enderror" value="{{old('benchtop_child_name')}}" placeholder="">
              @error('benchtop_child_name')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <!-- text input -->
            <div class="form-group">
              <label>Subcategory Stock</label>
              <input type="text" name="benchtop_child_stock" id="benchtop_child_stock" class="form-control @error('benchtop_child_stock') is-invalid @enderror" value="{{old('benchtop_child_stock')}}" placeholder="">
              @error('benchtop_child_stock')
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
              <label>Subcategory Details</label>
              <textarea class="form-control" rows="3" name="benchtop_child_details" id="benchtop_child_details" class="form-control @error('benchtop_child_details') is-invalid @enderror" value="{{old('benchtop_child_details')}}" placeholder=""></textarea>
              @error('benchtop_child_details')
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