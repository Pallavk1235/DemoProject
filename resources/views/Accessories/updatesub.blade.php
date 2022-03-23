@extends('layouts.app3')
@section('content')
  <!-- general form elements disabled -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Update Door Subcategory</h3>
      <a href="{{route('accessories.indexsub')}}" class="btn btn-info" style="float:right;">Show Category</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form role="form" action="{{route('accessories.updatesub')}}" method="POST">
        @csrf
        {{-- @dd($editmain); --}}
        <input type="hidden" name="id" value="{{$editsub->id}}">
        <div class="row">
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">

              <label>Select Category</label>
              {{-- <select class="form-control" name='accessories_main_id'>
                @foreach($typeid as $item)
                <option value="{{$item->id}}">{{$item->benchtop_parent_name}}</option>
                @endforeach
              </select> --}}
            </div>
          </div>
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">
              <label>Subcategory Name</label>
              <input type="text" name="accessories_sub_name" id="accessories_sub_name" class="form-control @error('accessories_sub_name') is-invalid @enderror" value="{{$editsub->accessories_sub_name}}" placeholder="">
              @error('accessories_sub_name')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-5">
            <!-- text input -->
            <div class="form-group">
              <label>Subcategory Price</label>
              <input type="text" name="accessories_sub_price" id="accessories_sub_price" class="form-control @error('accessories_sub_price') is-invalid @enderror" value="{{$editsub->accessories_sub_price}}" placeholder="">
              @error('accessories_sub_price')
              <span class="invalid-feedback" role='alert'>
                <strong>{{ $message }}</strong>           
              </span>
              @enderror
            </div>
          </div>
          <div class="col-sm-2">
            <!-- text input -->
            <div class="form-group">
              <label>subategory Stock</label>
              <input type="text" name="accessories_sub_stock" id="accessories_sub_stock" class="form-control @error('accessories_sub_stock') is-invalid @enderror" value="{{$editsub->accessories_sub_stock}}" placeholder="">
              @error('accessories_sub_stock')
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
              <textarea class="form-control" rows="3" name="accessories_sub_details" id="accessories_sub_details" class="form-control @error('accessories_sub_details') is-invalid @enderror" value="{{$editsub->accessories_sub_details}}" placeholder=""></textarea>
              @error('accessories_sub_details')
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