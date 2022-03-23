@extends('layouts.app3')
@section('content')
  <!-- general form elements disabled -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Add Benchtop category</h3>
      <a href="{{route('benchtop.indexmain')}}" class="btn btn-info" style="float:right;">Show Category</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" action="{{route('benchtop.updatemain')}}" method="POST">
        @csrf
        {{-- @dd($editmain); --}}
        <input type="hidden" name="id" value="{{$editmain->id}}">
        <div class="row">
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">

              <label>Select Benchtop type</label>
              {{-- <select class="form-control" name='glass_parent_id'>
                @foreach($typeid as $item)
                <option value="{{$item->id}}">{{$item->benchtop_type_name}}</option>
                @endforeach
              </select> --}}
            </div>
          </div>
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="benchtop_parent_name" id="benchtop_parent_name" class="form-control @error('benchtop_parent_name') is-invalid @enderror" value="{{$editmain->benchtop_parent_name}}" placeholder="">
              @error('benchtop_parent_name')
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
              <input type="text" name="benchtop_parent_stock" id="benchtop_parent_stock" class="form-control @error('benchtop_parent_stock') is-invalid @enderror" value="{{$editmain->benchtop_parent_stock}}" placeholder="">
              @error('benchtop_parent_stock')
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
              <textarea class="form-control" rows="3" name="benchtop_parent_details" id="benchtop_parent_details" class="form-control @error('benchtop_parent_details') is-invalid @enderror" value="{{$editmain->benchtop_parent_details}}" placeholder=""></textarea>
              @error('benchtop_parent_details')
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